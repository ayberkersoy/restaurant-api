<template>
    <div class="box-body">
        <table id="campaigns_table" class="table table-bordered table-striped table-hover data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ürün Adı</th>
                    <th>Fiyat</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="product, index in products">
                    <td>{{ product['id'] }}</td>
                    <td>{{ product['name'] }}</td>
                    <td>{{ product['price'] }} {{ product['currency'] }}</td>
                    <td>
                             <a href="#" class="btn btn-info" v-on:click="editPage(product['id'])"><i class="fa fa-edit"></i></a>
                            <!-- <a href="#" class="btn btn-xs btn-danger" v-on:click="handleSubmit(campaign.id, index)"><i class="fa fa-trash-o"></i></a> -->
                            <a href="#"
                               class="btn btn-danger"
                               v-on:click="deleteEntry(product.id, index)">
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
        name: "index-products",
        data: function() {
            return {
                products: [],
                id: ''
            }
        },

        mounted() {
            axios.get('/api/products')
                .then(response => this.products = response.data);
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Silmek istediğinize emin misiniz?")) {
                    let app = this;
                    axios.post('/api/products/' + id + '/destroy')
                        .then(function (resp) {
                            app.products.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete company");
                        });
                }
            },
            editPage(id) {
                window.location = '/products/' + id + '/edit';
            }
        }
    }
</script>