<template>
    <div class="box-body">
        <form enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Ürün Adı:</label>
                <input type="text" class="form-control" id="name" name="name"
                       required v-model="product.name" placeholder=" Ürün adını girin">
            </div>

            <div class="form-group">
                <label for="description">Açıklama:</label>
                <input type="text" class="form-control" id="description" name="description"
                       required v-model="product.description" placeholder=" Ürün açıklamasını girin">
            </div>

            <div class="form-group">
                <label for="category">Ürün Kategorisi:</label>
                <select name="category" id="category" class="form-control" v-model="product.category">
                    <option disabled value="">Lütfen seçiniz</option>
                    <option v-for="category, index in categories" v-bind:value="category.id">{{ category.name }}</option>
                </select>
            </div>

            <div class="form-group">
                <label for="price">Ürün Fiyatı:</label>
                <input type="text" class="form-control" id="price" name="price"
                       required v-model="product.price" placeholder=" Ürün fiyatını girin">
            </div>

            <div class="form-group">
                <label for="isFeatured">Ürün öne çıkarılsın mı?</label>
                <br>
                <input type="radio" class="form-check-input" id="isFeatured" name="isFeatured" v-model="product.isFeatured" value="1"> Evet
            </div>

            <div class="form-group">
                <label for="image_url">Ürün Resmi:</label>
                <input type="file" class="form-control" id="image_url" name="image_url"
                       required v-on:change="onImageChange" placeholder=" Ürün resmini girin">
                <img :src="product.image_url" alt="" width="200">
            </div>

            <button class="btn btn-success" @click.prevent="uploadImage()" id="add" name="add">
                <span class="glyphicon glyphicon-edit"></span> Düzenle
            </button>
        </form>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: 'edit-products',
        props: ['id'],
        data: function() {
            return {
                product: {},
                categories: []
            }
        },

        mounted() {
            // console.log(this.id);
            axios.get('/api/products/' + this.id)
                .then(response => this.product = response.data);
            axios.get('/api/categories')
                .then(response => this.categories = response.data);
        },

        methods: {
            onImageChange(e) {
                console.log(e.target.files[0]);
                this.product.image = e.target.files[0];
            },
            uploadImage(){
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };
                let formData = new FormData();
                formData.append('name', this.product.name);
                formData.append('description', this.product.description);
                formData.append('category_id', this.product.category);
                formData.append('price', this.product.price);
                formData.append('isFeatured', this.product.isFeatured);
                formData.append('image_url', this.product.image);
                // console.log(formData);
                axios.post('/api/products/' + this.id, formData, config).then(response => {
                    window.location = '/products';
                    // console.log(response);
                });
            }
        }
    }
</script>