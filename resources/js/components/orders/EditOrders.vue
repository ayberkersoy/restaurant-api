<template>
    <div class="box-body">
        <table class="table table-bordered" v-for="ord, index in order">
            <tr>
                <td><b>Sipariş Sahibi</b></td>
                <tr>
                    <td>
                        Adı & Soyadı: {{ ord.user.name }} {{ ord.user.surname }} <br>
                        E-mail: {{ ord.user.email }} {{ ord.user.email }}
                    </td>
                </tr>
            </tr>
            <tr>
                <td><b>Adres Bilgileri</b></td>
                <tr>
                    <td>
                        Adres Adı: {{ ord.user_contact.name }} <br>
                        Adres: {{ ord.user_contact.address }} <br>
                        Telefon: {{ ord.user_contact.phone }}
                    </td>
                </tr>
            </tr>
            <tr>
                <td><b>Ürünler</b></td>
                <tr v-for="basket, indexBasket in ord.baskets">
                    <td>
                        {{ indexBasket+1 }}. Ürün <br>
                        Ürün Adı: {{ basket.product_name }} <br>
                        Ürün Fiyatı: {{ basket.price }} <br>
                        Ürün Adeti: {{ basket.piece }}
                    </td>
                </tr>
            </tr>
            <tr>
                <td><b>Sipariş Notu:</b> {{ ord.note }}</td>
            </tr>
            <tr>
                <td><b>Sipariş Tarihi:</b> {{ ord.date_ordered }}</td>
            </tr>
            <tr>
                <td><b>Toplam Tutar:</b> {{ ord.price }} {{ ord.currency }}</td>
            </tr>
        </table>
    </div><!-- /.box-body -->
</template>

<script>
    export default {
        name: 'edit-orders',
        props: ['id'],
        data: function() {
            return {
                order: {}
            }
        },

        mounted() {
            axios.get('/api/orders/' + this.id)
                .then(response => this.order = response.data);
        }
    }
</script>