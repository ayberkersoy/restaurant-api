<template>
    <div class="box-body">
        <form enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Adı:</label>
                <input type="text" class="form-control" id="name" name="name"
                       required v-model="name" placeholder=" Kullanıcı adını girin">
            </div>

            <div class="form-group">
                <label for="surname">Soyadı:</label>
                <input type="text" class="form-control" id="surname" name="surname"
                       required v-model="surname" placeholder=" Kullanıcı soyadını girin">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email"
                       required v-model="email" placeholder=" Kullanıcı email adresini girin">
            </div>

            <div class="form-group">
                <label for="password">Şifre:</label>
                <input type="password" class="form-control" id="password" name="password"
                       required v-model="password" placeholder=" Kullanıci şifresi girin">
            </div>

            <div class="form-group">
                <label for="image_url">Kullanıcı Resmi:</label>
                <input type="file" class="form-control" id="image_url" name="image_url"
                       required v-on:change="onImageChange" placeholder=" Kullanıcı resmini girin">
            </div>

            <button class="btn btn-success" @click.prevent="uploadImage()" id="add" name="add">
                <span class="glyphicon glyphicon-plus"></span> Ekle
            </button>
        </form>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: "create-users",
        data: function() {
            return {
                name: '',
                surname: '',
                email: '',
                password: '',
                image: '',
            }
        },
        methods: {
            onImageChange(e) {
                console.log(e.target.files[0]);
                this.image = e.target.files[0];
            },
            uploadImage(){
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };
                let formData = new FormData();
                formData.append('name', this.name);
                formData.append('surname', this.surname);
                formData.append('email', this.email);
                formData.append('password', this.password);
                formData.append('password_confirmation', this.password);
                formData.append('avatar', this.image);
                axios.post('/api/users', formData, config).then(response => {
                    // console.log(response.data)
                    window.location = '/users';
                });
            }
        }
    }
</script>