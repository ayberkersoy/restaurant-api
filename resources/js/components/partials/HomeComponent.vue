<template>
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ orders.length }}</h3>
                    <p>Sipariş</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="/orders" class="small-box-footer">Tümü <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>{{ reservations.length }}</h3>
                    <p>Rezervasyon</p>
                </div>
                <div class="icon">
                    <i class="ion ion-calendar"></i>
                </div>
                <a href="/reservations" class="small-box-footer">Tümü <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>{{ users.length }}</h3>
                    <p>Kullanıcı</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="/users" class="small-box-footer">Tümü <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>{{ products.length }}</h3>
                    <p>Ürün</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pizza"></i>
                </div>
                <a href="/products" class="small-box-footer">Tümü <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Son Siparişler</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-bordered table-striped table-hover data-table">
                        <tr>
                            <th>#</th>
                            <th>Sipariş Tarihi</th>
                            <th>Sipariş Sahibi</th>
                            <th>Sipariş Tutarı</th>
                            <th>Sipariş Durumu</th>
                            <th>İşlemler</th>
                        </tr>
                        <tr v-for="(orderLast, i) in lastOrders">
                            <td>{{ orderLast.id }}</td>
                            <td>{{ orderLast.date_ordered }}</td>
                            <td>{{ orderLast.user.name }} {{ orderLast.user.surname }}</td>
                            <td>{{ orderLast.price }}</td>
                            <td>
                                <span v-if="orderLast.status === 0" class="label label-danger">İptal Edildi</span>
                                <span v-else-if="orderLast.status === 1" class="label label-warning">Bekliyor</span>
                                <span v-else-if="orderLast.status === 2" class="label label-primary">Onaylandı</span>
                                <span v-else-if="orderLast.status === 3" class="label label-success">Gönderildi</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-info" v-on:click="showOrder(orderLast.id)"><i class="fa fa-eye"></i></a>
                                <!-- <a href="#" class="btn btn-xs btn-danger" v-on:click="handleSubmit(campaign.id, index)"><i class="fa fa-trash-o"></i></a> -->
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Son Rezervasyonlar</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-bordered table-striped table-hover data-table">
                        <tr>
                            <th>#</th>
                            <th>Rezervasyon Sahibi</th>
                            <th>Rezervasyon Tarihi</th>
                            <th>Rezervasyon Saati</th>
                            <th>Rezervasyon Durumu</th>
                            <th>İşlemler</th>
                        </tr>
                        <tr v-for="(reservationLast, index) in lastReservations">
                            <td>{{ reservationLast.id }}</td>
                            <td>{{ reservationLast.name }} {{ reservationLast.surname }}</td>
                            <td>{{ reservationLast.reservation_date }}</td>
                            <td>{{ reservationLast.reservation_hour }}</td>
                            <td>
                                <span v-if="reservationLast.status === 0" class="label label-danger">İptal Edildi</span>
                                <span v-else-if="reservationLast.status === 2" class="label label-warning">Bekliyor</span>
                                <span v-else-if="reservationLast.status === 1" class="label label-primary">Onaylandı</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-info" v-on:click="showReservation(reservationLast.id)"><i class="fa fa-eye"></i></a>
                                <!-- <a href="#" class="btn btn-xs btn-danger" v-on:click="handleSubmit(campaign.id, index)"><i class="fa fa-trash-o"></i></a> -->
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
    <!-- /.row -->

</template>

<script>
    export default {
        name: "home-component",
        data: function() {
            return {
                reservations: [],
                orders: [],
                users: [],
                products: [],
                lastReservations: [],
                lastOrders: []
            }
        },

        mounted() {
            axios.get('/api/reservations')
                .then(response => this.reservations = response.data);
            axios.get('/api/orders')
                .then(response => this.orders = response.data);
            axios.get('/api/users')
                .then(response => this.users = response.data);
            axios.get('/api/products')
                .then(response => this.products = response.data);
            axios.get('/api/lastReservations')
                .then(response => this.lastReservations = response.data);
            axios.get('/api/lastOrders')
                .then(response => this.lastOrders = response.data);
        },

        methods: {
            showOrder(id) {
                window.location = '/orders/' + id + '/show';
            },
            showReservation(id) {
                window.location = '/reservations/' + id + '/edit';
            }
        },


    }
</script>

<style scoped>

</style>