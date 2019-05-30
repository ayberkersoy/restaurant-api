<template>
    <div class="box-body">
        <validation-errors :errors="validationErrors" v-if="validationErrors"></validation-errors>
        <form enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Ürün Adı:</label>
                <input type="text" class="form-control" id="name" name="name"
                       required v-model="name" placeholder=" Ürün adını girin">
            </div>

            <div class="form-group">
                <label for="description">Açıklama:</label>
                <input type="text" class="form-control" id="description" name="description"
                       required v-model="description" placeholder=" Ürün açıklamasını girin">
            </div>

            <div class="form-group">
                <label for="category">Ürün Kategorisi:</label>
                <select name="category" id="category" class="form-control" v-model="category">
                    <option disabled value="">Lütfen seçiniz</option>
                    <option v-for="category, index in categories" v-bind:value="category.id">{{ category.name }}</option>
                </select>
            </div>

            <div class="form-group">
                <label for="price">Ürün Fiyatı:</label>
                <input type="text" class="form-control" id="price" name="price"
                       required v-model="price" placeholder=" Ürün fiyatını girin">
            </div>

            <div class="form-group">
                <label for="isFeatured">Ürün öne çıkarılsın mı?</label>
                <br>
                <input type="radio" class="form-check-input" id="isFeatured" name="isFeatured" v-model="isFeatured" value="1"> Evet
            </div>

            <div class="form-group">
                <label for="image_url">Ürün Resmi:</label>
                <input type="file" class="form-control" id="image_url" name="image_url"
                       required v-on:change="onImageChange" placeholder=" Ürün resmini girin">
            </div>

            <button class="btn btn-success" @click.prevent="uploadImage()" id="add" name="add">
                <span class="glyphicon glyphicon-plus"></span> Ekle
            </button>
        </form>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: "create-products",
        data: function() {
            return {
                name: '',
                description: '',
                category: '',
                price: '',
                isFeatured: '',
                image: '',
                categories: [],
                validationErrors: ''
            }
        },
        mounted() {
            // console.log(this.id);
            axios.get('/api/categories')
                .then(response => this.categories = response.data);
        },
        methods: {
            onImageChange(e) {
                console.log(e.target.files[0]);
                this.image = e.target.files[0];
                let FileSize = e.target.files[0].size / 1024 / 1024; // in MB
                if (FileSize > 4) {
                    alert('En fazla 4 MB boyutunda resim yükleyebilirsiniz.');
                    // $(file).val(''); //for clearing with Jquery
                }
            },
            uploadImage(){
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };
                let formData = new FormData();
                formData.append('name', this.name);
                formData.append('description', this.description);
                formData.append('category_id', this.category);
                formData.append('price', this.price);
                formData.append('isFeatured', this.isFeatured);
                formData.append('image_url', this.image);
                axios.post('/api/products', formData, config).then(response => {
                    // console.log(response.data)
                    window.location = '/products';
                }).catch(error => {
                    if (error.response.status === 422){
                        this.validationErrors = error.response.data;
                    }
                });
            }
        }
    }
</script>