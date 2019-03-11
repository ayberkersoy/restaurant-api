<template>
    <div class="box-body">
        <form enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Kategori Adı:</label>
                <input type="text" class="form-control" id="name" name="name"
                       required placeholder=" Kategori adını girin"
                        v-model="category.name">
            </div>
            <div class="form-group">
                <label for="description">Kategori Açıklaması:</label>
                <input type="text" class="form-control" id="description" name="description"
                       required placeholder=" Kategori açıklamasını girin"
                       v-model="category.description">
            </div>
            <div class="form-group">
                <label for="image_url">Kategori Resmi:</label>
                <input type="file" class="form-control" id="image_url" name="image_url"
                       required v-on:change="onImageChange" placeholder=" Kategori resmini girin">
            </div>

            <button class="btn btn-success" @click.prevent="uploadImage()" id="add" name="add">
                <span class="glyphicon glyphicon-edit"></span> Düzenle
            </button>
        </form>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: 'edit-categories',
        props: ['id'],
        data: function() {
            return {
                name: '',
                description: '',
                category: {}
            }
        },

        mounted() {
            // console.log(this.id);
            axios.get('/api/categories/' + this.id)
                .then(response => this.category = response.data);
        },

        methods: {
            onImageChange(e) {
                console.log(e.target.files[0]);
                this.category.image = e.target.files[0];
            },
            uploadImage(){
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };
                let formData = new FormData();
                formData.append('name', this.category.name);
                formData.append('description', this.category.description);
                formData.append('image_url', this.category.image);
                // console.log(formData);
                axios.post('/api/categories/' + this.id, formData, config).then(response => {
                    window.location = '/categories';
                    // console.log(response);
                });
            }
        }
    }
</script>