<template>
    <div class="box-body">
        <validation-errors :errors="validationErrors" v-if="validationErrors"></validation-errors>
        <form enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Ödeme Tipi Adı:</label>
                <input type="text" class="form-control" id="name" name="name"
                       required v-model="name" placeholder=" Ödeme tipi adını girin">
            </div>

            <button class="btn btn-success" @click.prevent="uploadImage()" id="add" name="add">
                <span class="glyphicon glyphicon-plus"></span> Ekle
            </button>
        </form>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: "create-payment-types",
        data: function() {
            return {
                name: '',
                validationErrors: ''
            }
        },
        methods: {
            uploadImage(){
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };
                let formData = new FormData();
                formData.append('name', this.name);
                axios.post('/api/paymentTypes', formData, config).then(response => {
                    window.location = '/paymentTypes';
                }).catch(error => {
                    if (error.response.status === 422){
                        this.validationErrors = error.response.data;
                    }
                });
            }
        }
    }
</script>