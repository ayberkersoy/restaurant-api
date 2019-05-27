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
                    <th>Sipariş Durumu</th>
                    <th>Sipariş Notu</th>
                    <th>İşlemler</th>
                    <th>
                        <input type="text" placeholder="Arama" v-model="search" class="form-control">
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="order, index in filteredOrders">
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
                    <td class="form-inline">
                        <div class="form-group">
                            <select name="status" class="form-control" :id="order.id">
                                <option value="" selected disabled>Seçiniz</option>
                                <option value="0">İptal Edildi</option>
                                <option value="1">Bekliyor</option>
                                <option value="2">Onaylandı</option>
                                <option value="3">Gönderildi</option>
                            </select>
                        </div>
                        <a class="btn btn-success" @click.prevent="orderUpdated(order.id)" id="edit" name="edit">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                    <td>{{ order.note }}</td>
                    <td colspan="2">
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
                id: '',
                status: '',
                search: ''
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
            },
            orderUpdated(id){
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };
                let formData = new FormData();
                let status = document.getElementById(id);
                formData.append('status', status.options[status.selectedIndex].value);
                axios.post('/api/orders/' + id + '/updated', formData, config).then(response => {
                    window.location = '/orders';
                });
            }
        },

        computed: {
            filteredOrders: function() {
                return this.orders.filter((order) => {
                    return order.user.name.toLowerCase().match(this.search.toLowerCase());
                })
            }
        }
    }
</script>