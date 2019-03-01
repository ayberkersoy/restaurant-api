<template>
    <div class="box-body">
        <table id="campaigns_table" class="table table-bordered table-striped table-hover data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kampanya Adı</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="campaign, index in campaigns">
                    <td>{{ campaign['id'] }}</td>
                    <td>{{ campaign['name'] }}</td>
                    <td>
                             <a href="#" class="btn btn-info" v-on:click="editPage(campaign['id'])"><i class="fa fa-edit"></i></a>
                            <!-- <a href="#" class="btn btn-xs btn-danger" v-on:click="handleSubmit(campaign.id, index)"><i class="fa fa-trash-o"></i></a> -->
                            <a href="#"
                               class="btn btn-danger"
                               v-on:click="deleteEntry(campaign.id, index)">
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
        name: "campaigns-index",
        data: function() {
            return {
                campaigns: [],
                id: ''
            }
        },

        mounted() {
            axios.get('/api/campaigns')
                .then(response => this.campaigns = response.data);
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Silmek istediğinize emin misiniz?")) {
                    let app = this;
                    axios.post('/api/campaigns/' + id + '/destroy')
                        .then(function (resp) {
                            app.campaigns.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete company");
                        });
                }
            },
            editPage(id) {
                window.location = '/campaigns/' + id + '/edit';
            }
        }
    }
</script>