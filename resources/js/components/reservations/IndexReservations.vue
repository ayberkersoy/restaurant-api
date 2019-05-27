<template>
    <div class="box-body">
        <table id="campaigns_table" class="table table-bordered table-striped table-hover data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Rezervasyon Sahibi</th>
                    <th>Rezervasyon Tarihi</th>
                    <th>Rezervasyon Saati</th>
                    <th>Rezervasyon Durumu</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="reservation, index in reservations">
                    <td>{{ reservation.id }}</td>
                    <td>{{ reservation.name }} {{ reservation.surname }}</td>
                    <td>{{ reservation.reservation_date }}</td>
                    <td>{{ reservation.reservation_hour }}</td>
                    <td>
                        <span v-if="reservation.status === 0" class="label label-danger">İptal Edildi</span>
                        <span v-if="reservation.status === 1" class="label label-warning">Onaylandı</span>
                        <span v-if="reservation.status === 2" class="label label-success">Bekliyor</span>
                    </td>
                    <td>
                             <a href="#" class="btn btn-info" v-on:click="editPage(reservation['id'])"><i class="fa fa-eye"></i></a>
                            <!-- <a href="#" class="btn btn-xs btn-danger" v-on:click="handleSubmit(campaign.id, index)"><i class="fa fa-trash-o"></i></a> -->
                            <a href="#"
                               class="btn btn-danger"
                               v-on:click="deleteEntry(reservation.id, index)">
                                <i class="fa fa-trash-o"></i>
                            </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: "index-reservations",
        data: function() {
            return {
                reservations: [],
                id: ''
            }
        },

        mounted() {
            axios.get('/api/reservations')
                .then(response => this.reservations = response.data);
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Silmek istediğinize emin misiniz?")) {
                    let app = this;
                    axios.post('/api/reservations/' + id + '/destroy')
                        .then(function (resp) {
                            app.reservations.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete company");
                        });
                }
            },
            editPage(id) {
                window.location = '/reservations/' + id + '/edit';
            }
        }
    }
</script>