<template>
    <div class="box-body">
        <table class="table table-bordered" v-for="ord, index in order">
            <tr>
                <td><b>Sipariş Sahibi</b></td>
                <tr>
                    <td>
                        Adı & Soyadı: {{ ord.user.name }} {{ ord.user.surname }} <br>
                        E-mail: {{ ord.user.email }}
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
            <tr>
                <td><b>Sipariş Durumu:</b>
                    <span v-if="ord.status === 0" class="danger">İptal Edildi</span>
                    <span v-if="ord.status === 1" class="danger">Bekliyor</span>
                    <span v-if="ord.status === 2" class="danger">Onaylandı</span>
                    <span v-if="ord.status === 3" class="danger">Gönderildi</span>
                </td>
            </tr>
            <tr>
                <td><b>Sipariş Durumu Güncelle</b></td>
            </tr>
            <tr>
                <td>
                    <select name="status" class="form-control" v-model="status" style="max-width:20%;">
                        <option value="" disabled>Seçiniz</option>
                        <option value="0">İptal Edildi</option>
                        <option value="1">Bekliyor</option>
                        <option value="2">Onaylandı</option>
                        <option value="3">Gönderildi</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <button class="btn btn-success" @click.prevent="orderUpdated()" id="edit" name="edit">
                        <span class="glyphicon glyphicon-edit"></span> Güncelle
                    </button>
                </td>
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
                order: {},
                status: ''
            }
        },

        mounted() {
            axios.get('/api/orders/' + this.id)
                .then(response => this.order = response.data);
        },
        methods: {
            orderUpdated(){
                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };
                let formData = new FormData();
                formData.append('status', this.status);
                axios.post('/api/orders/' + this.id + '/updated', formData, config).then(response => {
                    window.location = '/orders';
                });
            }
        }
    }
</script>