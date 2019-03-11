<template>
    <div class="box-body">
        <table id="categories_table" class="table table-bordered table-striped table-hover data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kategori Adı</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="category, index in categories">
                    <td>{{ category['id'] }}</td>
                    <td>{{ category['name'] }}</td>
                    <td>
                             <a href="#" class="btn btn-info" v-on:click="editPage(category['id'])"><i class="fa fa-edit"></i></a>
                            <!-- <a href="#" class="btn btn-xs btn-danger" v-on:click="handleSubmit(campaign.id, index)"><i class="fa fa-trash-o"></i></a> -->
                            <a href="#"
                               class="btn btn-danger"
                               v-on:click="deleteEntry(category.id, index)">
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
        name: "index-categories",
        data: function() {
            return {
                categories: [],
                id: ''
            }
        },

        mounted() {
            axios.get('/api/categories')
                .then(response => this.categories = response.data);
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Silmek istediğinize emin misiniz?")) {
                    let app = this;
                    axios.post('/api/categories/' + id + '/destroy')
                        .then(function (resp) {
                            app.categories.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete company");
                        });
                }
            },
            editPage(id) {
                window.location = '/categories/' + id + '/edit';
            }
        }
    }
</script>