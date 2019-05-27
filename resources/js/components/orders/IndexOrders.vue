<template>
    <div class="box-body">
        <table id="categories_table" class="table table-bordered table-striped table-hover data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Sipariş Tarihi</th>
                    <th>Sipariş Sahibi</th>
                    <th>Sipariş Tutarı</th>
                    <th>Sipariş Durumu</th>
                    <th>Sipariş Notu</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="order, index in orders">
                    <td>{{ order.id }}</td>
                    <td>{{ order.date_ordered }}</td>
                    <td>{{ order.user.name }} {{ order.user.surname }}</td>
                    <td>{{ order.price }} {{ order.currency }}</td>
                    <td>
                        <span v-if="order.status === 0" class="label label-danger">İptal Edildi</span>
                        <span v-if="order.status === 1" class="label label-warning">Bekliyor</span>
                        <span v-if="order.status === 2" class="label label-primary">Onaylandı</span>
                        <span v-if="order.status === 3" class="label label-success">Gönderildi</span>
                    </td>
                    <td>{{ order.note }}</td>
                    <td>
                             <a href="#" class="btn btn-info" v-on:click="editPage(order['id'])"><i class="fa fa-eye"></i></a>
                            <!-- <a href="#" class="btn btn-xs btn-danger" v-on:click="handleSubmit(campaign.id, index)"><i class="fa fa-trash-o"></i></a> -->
                            <a href="#"
                               class="btn btn-danger"
                               v-on:click="deleteEntry(order.id, index)">
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
        name: "index-orders",
        data: function() {
            return {
                orders: [],
                id: ''
            }
        },

        mounted() {
            axios.get('/api/orders')
                .then(response => this.orders = response.data);
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Silmek istediğinize emin misiniz?")) {
                    let app = this;
                    axios.post('/api/orders/' + id + '/destroy')
                        .then(function (resp) {
                            app.orders.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete company");
                        });
                }
            },
            editPage(id) {
                window.location = '/orders/' + id + '/show';
            }
        }
    }
</script>