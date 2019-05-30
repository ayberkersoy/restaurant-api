<template>
    <div class="box-body">
        <validation-errors :errors="validationErrors" v-if="validationErrors"></validation-errors>
        <form enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Çalışan Adı:</label>
                <input type="text" class="form-control" id="name" name="name"
                       required placeholder=" Çalışan adını girin"
                        v-model="employee.name">
            </div>
            <div class="form-group">
                <label for="surname">Çalışan Soyadı:</label>
                <input type="text" class="form-control" id="surname" name="surname"
                       required placeholder=" Çalışan soyadını girin"
                       v-model="employee.surname">
            </div>
            <div class="form-group">
                <label for="description">Çalışan Açıklaması:</label>
                <input type="text" class="form-control" id="description" name="description"
                       required placeholder=" Çalışan açıklamasını girin"
                       v-model="employee.description">
            </div>
            <div class="form-group">
                <label for="image_url">Çalışan Resmi:</label>
                <input type="file" class="form-control" id="image_url" name="image_url"
                       required v-on:change="onImageChange" placeholder=" Çalışan resmini girin">
            </div>

            <button class="btn btn-success" @click.prevent="uploadImage()" id="add" name="add">
                <span class="glyphicon glyphicon-edit"></span> Düzenle
            </button>
        </form>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: 'edit-employees',
        props: ['id'],
        data: function() {
            return {
                name: '',
                surname: '',
                description: '',
                employee: {},
                validationErrors: ''
            }
        },

        mounted() {
            // console.log(this.id);
            axios.get('/api/employees/' + this.id)
                .then(response => this.employee = response.data);
        },

        methods: {
            onImageChange(e) {
                console.log(e.target.files[0]);
                this.employee.image = e.target.files[0];
            },
            uploadImage(){
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };
                let formData = new FormData();
                formData.append('name', this.employee.name);
                formData.append('surname', this.employee.surname);
                formData.append('description', this.employee.description);
                formData.append('image_url', this.employee.image);
                // console.log(formData);
                axios.post('/api/employees/' + this.id, formData, config).then(response => {
                    window.location = '/employees';
                    // console.log(response);
                }).catch(error => {
                    if (error.response.status === 422){
                        this.validationErrors = error.response.data;
                    }
                });
            }
        }
    }
</script>