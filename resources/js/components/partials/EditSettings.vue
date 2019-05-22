<template>
    <div class="box-body">
        <form enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">İşletme Adı:</label>
                <input type="text" class="form-control" id="name" name="name"
                       required placeholder=" İşletme Adı"
                       v-model="settings.name">
            </div>

            <div class="form-group">
                <label for="phone">Telefon Numarası:</label>
                <input type="text" class="form-control" id="phone" name="phone"
                       required placeholder=" Telefon Numarası"
                       v-model="settings.phone">
            </div>

            <div class="form-group">
                <label for="address">Adres:</label>
                <input type="text" class="form-control" id="address" name="address"
                       required placeholder=" Adres"
                       v-model="settings.address">
            </div>

            <div class="form-group">
                <label for="working_hours_day">Açılış Saati:</label>
                <input type="text" class="form-control" id="working_hours_day" name="working_hours_day"
                       required placeholder=" Açılış Saati"
                       v-model="settings.working_hours_day">
            </div>

            <div class="form-group">
                <label for="working_hours_night">Kapanış Saati:</label>
                <input type="text" class="form-control" id="working_hours_night" name="working_hours_night"
                       required placeholder=" Kapanış Saati"
                       v-model="settings.working_hours_night">
            </div>

            <div class="form-group">
                <label for="working_hours">Manuel Açılış Kapanış Saati:</label>
                <input type="text" class="form-control" id="working_hours" name="working_hours"
                       required placeholder=" Manuel Açılış Kapanış Saati"
                       v-model="settings.working_hours">
            </div>

            <div class="form-group">
                <label for="facebook">Facebook Adresi:</label>
                <input type="text" class="form-control" id="facebook" name="facebook"
                       required placeholder=" Facebook Adresi"
                       v-model="settings.facebook">
            </div>

            <div class="form-group">
                <label for="twitter">Twitter Adresi:</label>
                <input type="text" class="form-control" id="twitter" name="twitter"
                       required placeholder=" Twitter Adresi"
                       v-model="settings.twitter">
            </div>

            <div class="form-group">
                <label for="instagram">Instagram Adresi:</label>
                <input type="text" class="form-control" id="instagram" name="instagram"
                       required placeholder=" Instagram Adresi"
                       v-model="settings.instagram">
            </div>

            <div class="form-group">
                <label for="about_text">Hakkımızda:</label>
                <input type="text" class="form-control" id="about_text" name="about_text"
                       required placeholder=" Hakkımızda"
                       v-model="settings.about_text">
            </div>



            <div class="form-group">
                <input type="hidden" class="form-control" id="id" name="id"
                       required placeholder=" İşletme Adı"
                       v-model="settings.id">
            </div>

            <button class="btn btn-success" @click.prevent="uploadImage()" id="add" name="add">
                <span class="glyphicon glyphicon-edit"></span> Düzenle
            </button>
        </form>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: 'edit-settings',
        data: function() {
            return {
                settings: {}
            }
        },

        mounted() {
            // console.log(this.id);
            axios.get('/api/getCompany')
                .then(response => this.settings = response.data);
        },

        methods: {
            uploadImage(){
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };
                let formData = new FormData();
                formData.append('name', this.settings.name);
                formData.append('phone', this.settings.phone);
                formData.append('address', this.settings.address);
                formData.append('working_hours_day', this.settings.working_hours_day);
                formData.append('working_hours_night', this.settings.working_hours_night);
                formData.append('working_hours', this.settings.working_hours);
                formData.append('facebook', this.settings.facebook);
                formData.append('twitter', this.settings.twitter);
                formData.append('instagram', this.settings.instagram);
                formData.append('about_text', this.settings.about_text);
                formData.append('id', this.settings.id);
                // console.log(formData);
                axios.post('/api/companies/' + this.settings.id, formData, config).then(response => {
                    window.location = '/settings';
                    // console.log(response);
                });
            }
        }
    }
</script>