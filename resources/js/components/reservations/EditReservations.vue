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
        </table>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: 'edit-reservations',
        props: ['id'],
        data: function() {
            return {
                reservation: {}
            }
        },

        mounted() {
            axios.get('/api/reservations/' + this.id)
                .then(response => this.reservation = response.data);
        }
    }
</script>