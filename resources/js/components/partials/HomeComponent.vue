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
                products: []
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
        },
    }
</script>

<style scoped>

</style>