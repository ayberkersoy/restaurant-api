<template>
    <div class="box-body">
        <form enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Kampanya Adı:</label>
                <input type="text" class="form-control" id="name" name="name"
                       required v-model="name" placeholder=" Kampanya adını girin">
            </div>
            <div class="form-group">
                <label for="description">Kampanya Açıklaması:</label>
                <input type="text" class="form-control" id="description" name="description"
                       required v-model="description" placeholder=" Kampanya açıklamasını girin">
            </div>
            <div class="form-group">
                <label for="image_url">Kampanya Resmi:</label>
                <input type="file" class="form-control" id="image_url" name="image_url"
                       required v-on:change="onImageChange" placeholder=" Kampanya resmini girin">
            </div>

            <button class="btn btn-success" @click.prevent="uploadImage()" id="add" name="add">
                <span class="glyphicon glyphicon-plus"></span> Ekle
            </button>
        </form>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: "create-campaign",
        data: function() {
            return {
                name: '',
                description: '',
                image: ''
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
                formData.append('description', this.description);
                formData.append('image_url', this.image);
                axios.post('/api/campaigns', formData, config).then(response => {
                    window.location = '/campaigns';
                });
            }
        }
    }
</script>