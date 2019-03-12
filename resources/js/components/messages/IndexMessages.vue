<template>
    <div class="box-body">
        <table id="categories_table" class="table table-bordered table-striped table-hover data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Adı</th>
                    <th>Konu</th>
                    <th>Mesaj</th>
                    <th>E-mail</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="message, index in messages">
                    <td>{{ message['id'] }}</td>
                    <td>{{ message['name'] }}</td>
                    <td>{{ message['about'] }}</td>
                    <td>{{ message['message'] }}</td>
                    <td>{{ message['phone'] }}</td>
                    <td>
                             <!--<a href="#" class="btn btn-info" v-on:click="editPage(message['id'])"><i class="fa fa-edit"></i></a>-->
                            <!-- <a href="#" class="btn btn-xs btn-danger" v-on:click="handleSubmit(campaign.id, index)"><i class="fa fa-trash-o"></i></a> -->
                            <a href="#"
                               class="btn btn-danger"
                               v-on:click="deleteEntry(message.id, index)">
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
        name: "index-messages",
        data: function() {
            return {
                messages: [],
                id: ''
            }
        },

        mounted() {
            axios.get('/api/messages')
                .then(response => this.messages = response.data);
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Silmek istediğinize emin misiniz?")) {
                    let app = this;
                    axios.post('/api/messages/' + id + '/destroy')
                        .then(function (resp) {
                            app.messages.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete company");
                        });
                }
            },
            editPage(id) {
                window.location = '/messages/' + id + '/edit';
            }
        }
    }
</script>