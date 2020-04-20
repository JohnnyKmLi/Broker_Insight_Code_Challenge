const helloWorldContainer = new Vue({
    el: '#policyContainer',
    data: {
        policys: {},
    },
    methods: {
        fetchPolicys: function() {
            axios.get('http://localhost/workspace/PolicyController.php')
                .then(response => {
                    this.policys = response.data;
                })
        }
    }
});
