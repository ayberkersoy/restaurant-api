<template>
    <div class="box-body">
        <validation-errors :errors="validationErrors" v-if="validationErrors"></validation-errors>
        <form enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Çalışan Adı:</label>
                <input type="text" class="form-control" id="name" name="name"
                       required v-model="name" placeholder=" Çalışan adını girin">
            </div>
            <div class="form-group">
                <label for="surname">Çalışan Soyadı:</label>
                <input type="text" class="form-control" id="surname" name="surname"
                       required v-model="surname" placeholder=" Çalışan soyadını girin">
            </div>
            <div class="form-group">
                <label for="description">Çalışan Açıklaması:</label>
                <input type="text" class="form-control" id="description" name="description"
                       required v-model="description" placeholder=" Çalışan açıklamasını girin">
            </div>
            <div class="form-group">
                <label for="image_url">Çalışan Resmi:</label>
                <input type="file" class="form-control" id="image_url" name="image_url"
                       required v-on:change="onImageChange" placeholder=" Çalışan resmini girin">
            </div>

            <button class="btn btn-success" @click.prevent="uploadImage()" id="add" name="add">
                <span class="glyphicon glyphicon-plus"></span> Ekle
            </button>
        </form>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: "create-employees",
        data: function() {
            return {
                name: '',
                surname: '',
                description: '',
                image: '',
                validationErrors: ''
            }
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
                formData.append('surname', this.surname);
                formData.append('description', this.description);
                formData.append('image_url', this.image);
                axios.post('/api/employees', formData, config).then(response => {
                    window.location = '/employees';
                }).catch(error => {
                    if (error.response.status === 422){
                        this.validationErrors = error.response.data;
                    }
                });
            }
        }
    }
</script>