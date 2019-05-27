<template>
    <div class="box-body">
        <table class="table table-bordered">
            <tr>
                <td><b>Rezervasyon Sahibi</b></td>
                <td>{{ reservation.name }} {{ reservation.surname }}</td>
            </tr>
            <tr>
                <td><b>Rezervasyon Sahibi Telefon Numarası</b></td>
                <td>{{ reservation.phone }}</td>
            </tr>
            <tr>
                <td><b>Rezervasyon Tarihi</b></td>
                <td>{{ reservation.reservation_date }}</td>
            </tr>
            <tr>
                <td><b>Rezervasyon Saati</b></td>
                <td>{{ reservation.reservation_hour }}</td>
            </tr>
            <tr>
                <td><b>Rezervasyon Kişi Sayısı</b></td>
                <td>{{ reservation.people_count }} Kişi</td>
            </tr>
            <tr>
                <td><b>Rezervasyon Notu</b></td>
                <td>{{ reservation.note }}</td>
            </tr>
            <tr>
                <td><b>Rezervasyon Durumu:</b></td>
                <td>
                    <span v-if="reservation.status === 0" class="danger">İptal Edildi</span>
                    <span v-if="reservation.status === 1" class="danger">Onaylandı</span>
                    <span v-if="reservation.status === 2" class="danger">Bekliyor</span>
                </td>
            </tr>
            <tr>
                <td><b>Rezervasyon Durumu Güncelle</b></td>
            </tr>
            <tr>
                <td>
                    <select name="status" class="form-control" v-model="status" style="max-width:50%;">
                        <option value="" disabled>Seçiniz</option>
                        <option value="1">Onaylandı</option>
                        <option value="0">İptal Edildi</option>
                        <option value="2">Bekliyor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-success" @click.prevent="reservationUpdated()" id="edit" name="edit">
                        <span class="glyphicon glyphicon-edit"></span> Güncelle
                    </button>
                </td>
            </tr>
        </table>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: 'edit-reservations',
        props: ['id'],
        data: function() {
            return {
                reservation: {},
                status: ''
            }
        },

        mounted() {
            axios.get('/api/reservations/' + this.id)
                .then(response => this.reservation = response.data);
        },
        methods: {
            reservationUpdated(){
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };
                let formData = new FormData();
                formData.append('status', this.status);
                axios.post('/api/reservations/' + this.id + '/updated', formData, config).then(response => {
                    window.location = '/reservations/' + this.id + '/edit';
                });
            }
        }
    }
</script>