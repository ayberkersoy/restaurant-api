<template>
    <div class="box-body">
        <validation-errors :errors="validationErrors" v-if="validationErrors"></validation-errors>
        <form enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Kampanya Adı:</label>
                <input type="text" class="form-control" id="name" name="name"
                       required placeholder=" Kampanya adını girin"
                        v-model="campaign.name">
            </div>
            <div class="form-group">
                <label for="description">Kampanya Açıklaması:</label>
                <input type="text" class="form-control" id="description" name="description"
                       required placeholder=" Kampanya açıklamasını girin"
                       v-model="campaign.description">
            </div>
            <div class="form-group">
                <label for="image_url">Kampanya Resmi:</label>
                <input type="file" class="form-control" id="image_url" name="image_url"
                       required v-on:change="onImageChange" placeholder=" Kampanya resmini girin">
                <img :src="campaign.image_url" alt="" width="200">
            </div>

            <button class="btn btn-success" @click.prevent="uploadImage()" id="add" name="add">
                <span class="glyphicon glyphicon-edit"></span> Düzenle
            </button>
        </form>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: 'edit-campaign',
        props: ['id'],
        data: function() {
            return {
                name: '',
                description: '',
                campaign: {},
                validationErrors: ''
            }
        },

        mounted() {
            // console.log(this.id);
            axios.get('/api/campaigns/' + this.id)
                .then(response => this.campaign = response.data);
        },

        methods: {
            onImageChange(e) {
                console.log(e.target.files[0]);
                this.campaign.image = e.target.files[0];
                let FileSize = e.target.files[0].size / 1024 / 1024; // in MB
                if (FileSize > 4) {
                    alert('En fazla 4 MB boyutunda resim yükleyebilirsiniz.');
                    // $(file).val('');
                }
            },
            uploadImage(){
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };
                let formData = new FormData();
                formData.append('name', this.campaign.name);
                formData.append('description', this.campaign.description);
                formData.append('image_url', this.campaign.image);
                // console.log(formData);
                axios.post('/api/campaigns/' + this.id, formData, config).then(response => {
                    window.location = '/campaigns';
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