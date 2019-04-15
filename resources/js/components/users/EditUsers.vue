<template>
    <div class="box-body">
        <form enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Adı:</label>
                <input type="text" class="form-control" id="name" name="name"
                       required v-model="user.name" placeholder=" Kullanıcı adını girin">
            </div>

            <div class="form-group">
                <label for="surname">Soyadı:</label>
                <input type="text" class="form-control" id="surname" name="surname"
                       required v-model="user.surname" placeholder=" Kullanıcı soyadını girin">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email"
                       required v-model="user.email" placeholder=" Kullanıcı email adresini girin">
            </div>

            <div class="form-group">
                <label for="password">Şifre:</label>
                <input type="password" class="form-control" id="password" name="password"
                       required v-model="user.password" placeholder=" Kullanıci şifresi girin">
            </div>

            <div class="form-group">
                <label for="image_url">Kullanıcı Resmi:</label>
                <input type="file" class="form-control" id="image_url" name="image_url"
                       required v-on:change="onImageChange" placeholder=" Kullanıcı resmini girin">
            </div>

            <button class="btn btn-success" @click.prevent="uploadImage()" id="add" name="add">
                <span class="glyphicon glyphicon-edit"></span> Düzenle
            </button>
        </form>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: 'edit-users',
        props: ['id'],
        data: function() {
            return {
                user: {},
            }
        },

        mounted() {
            // console.log(this.id);
            axios.get('/api/users/' + this.id)
                .then(response => this.user = response.data);
        },

        methods: {
            onImageChange(e) {
                console.log(e.target.files[0]);
                this.user.image = e.target.files[0];
            },
            uploadImage(){
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };
                let formData = new FormData();
                formData.append('name', this.user.name);
                formData.append('surname', this.user.surname);
                formData.append('email', this.user.email);
                formData.append('password', this.user.password);
                formData.append('password_confirmation', this.user.password);
                formData.append('avatar', this.user.image);
                // console.log(formData);
                axios.post('/api/users/' + this.id, formData, config).then(response => {
                    window.location = '/users';
                    // console.log(response);
                });
            }
        }
    }
</script>