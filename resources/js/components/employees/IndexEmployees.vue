<template>
    <div class="box-body">
        <table id="categories_table" class="table table-bordered table-striped table-hover data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Adı</th>
                    <th>Soyadı</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="employee, index in employees">
                    <td>{{ employee['id'] }}</td>
                    <td>{{ employee['name'] }}</td>
                    <td>{{ employee['surname'] }}</td>
                    <td>
                             <a href="#" class="btn btn-info" v-on:click="editPage(employee['id'])"><i class="fa fa-edit"></i></a>
                            <!-- <a href="#" class="btn btn-xs btn-danger" v-on:click="handleSubmit(campaign.id, index)"><i class="fa fa-trash-o"></i></a> -->
                            <a href="#"
                               class="btn btn-danger"
                               v-on:click="deleteEntry(employee.id, index)">
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
        name: "index-employees",
        data: function() {
            return {
                employees: [],
                id: ''
            }
        },

        mounted() {
            axios.get('/api/employees')
                .then(response => this.employees = response.data);
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Silmek istediğinize emin misiniz?")) {
                    let app = this;
                    axios.post('/api/employees/' + id + '/destroy')
                        .then(function (resp) {
                            app.employees.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete company");
                        });
                }
            },
            editPage(id) {
                window.location = '/employees/' + id + '/edit';
            }
        }
    }
</script>