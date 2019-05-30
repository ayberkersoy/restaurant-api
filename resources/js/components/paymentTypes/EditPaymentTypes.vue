<template>
    <div class="box-body">
        <validation-errors :errors="validationErrors" v-if="validationErrors"></validation-errors>
        <form enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Ödeme Tipi Adı:</label>
                <input type="text" class="form-control" id="name" name="name"
                       required placeholder=" Kampanya adını girin"
                        v-model="paymentType.name">
            </div>

            <button class="btn btn-success" @click.prevent="uploadImage()" id="add" name="add">
                <span class="glyphicon glyphicon-edit"></span> Düzenle
            </button>
        </form>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: 'edit-payment-types',
        props: ['id'],
        data: function() {
            return {
                paymentType: {},
                validationErrors: ''
            }
        },

        mounted() {
            // console.log(this.id);
            axios.get('/api/paymentTypes/' + this.id)
                .then(response => this.paymentType = response.data);
        },

        methods: {
            uploadImage(){
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };
                let formData = new FormData();
                formData.append('name', this.paymentType.name);
                // console.log(formData);
                axios.post('/api/paymentTypes/' + this.id, formData, config).then(response => {
                    window.location = '/paymentTypes';
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