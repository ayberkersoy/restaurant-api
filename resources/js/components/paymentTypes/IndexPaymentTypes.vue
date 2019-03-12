<template>
    <div class="box-body">
        <table id="campaigns_table" class="table table-bordered table-striped table-hover data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ödeme Tipi Adı</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="paymentType, index in paymentTypes">
                    <td>{{ paymentType['id'] }}</td>
                    <td>{{ paymentType['name'] }}</td>
                    <td>
                             <a href="#" class="btn btn-info" v-on:click="editPage(paymentType['id'])"><i class="fa fa-edit"></i></a>
                            <!-- <a href="#" class="btn btn-xs btn-danger" v-on:click="handleSubmit(campaign.id, index)"><i class="fa fa-trash-o"></i></a> -->
                            <a href="#"
                               class="btn btn-danger"
                               v-on:click="deleteEntry(paymentType.id, index)">
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
        name: "index-payment-types",
        data: function() {
            return {
                paymentTypes: [],
                id: ''
            }
        },

        mounted() {
            axios.get('/api/paymentTypes')
                .then(response => this.paymentTypes = response.data);
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Silmek istediğinize emin misiniz?")) {
                    let app = this;
                    axios.post('/api/paymentTypes/' + id + '/destroy')
                        .then(function (resp) {
                            app.paymentTypes.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete company");
                        });
                }
            },
            editPage(id) {
                window.location = '/paymentTypes/' + id + '/edit';
            }
        }
    }
</script>