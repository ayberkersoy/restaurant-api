<template>
    <div class="box-body">
        <table id="categories_table" class="table table-bordered table-striped table-hover data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Yorum</th>
                    <th>Ürün</th>
                    <th>Puan</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="comment, index in comments">
                    <td>{{ comment['id'] }}</td>
                    <td>{{ comment['comment'] }}</td>
                    <td>{{ comment.product.name }}</td>
                    <td><i class="fa fa-star"></i> {{ comment.stars }}</td>
                    <td>
                             <!--<a href="#" class="btn btn-info" v-on:click="editPage(category['id'])"><i class="fa fa-edit"></i></a>-->
                            <!-- <a href="#" class="btn btn-xs btn-danger" v-on:click="handleSubmit(campaign.id, index)"><i class="fa fa-trash-o"></i></a> -->
                            <a href="#"
                               class="btn btn-danger"
                               v-on:click="deleteEntry(comment.id, index)">
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
        name: "index-comments",
        data: function() {
            return {
                comments: [],
                id: ''
            }
        },

        mounted() {
            axios.get('/api/comments')
                .then(response => this.comments = response.data);
                // .then(response => console.log(response.data));
        },
        methods: {
            deleteEntry(id, index) {
                if (confirm("Silmek istediğinize emin misiniz?")) {
                    let app = this;
                    axios.post('/api/comments/' + id + '/destroy')
                        .then(function (resp) {
                            app.comments.splice(index, 1);
                        })
                        .catch(function (resp) {
                            alert("Could not delete company");
                        });
                }
            },
            editPage(id) {
                window.location = '/comments/' + id + '/edit';
            }
        }
    }
</script>