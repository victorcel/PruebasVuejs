var urlUsers = 'https://randomuser.me/api/?results=10';
new Vue({

    el: '#main',
    created: function () {
        this.getUsers();
    },
    data: {
        lists: [],
          people: ['Lynda', 'Isabella', 'Diana', 'Luisa'],
          info: ''

    },
  //  name: '',
    methods: {
        addName: function () {
            this.people.push(this.name);
            this.name = '';
        },
        getUsers: function () {
            this.$http.get(urlUsers).then(function (response) {
                this.lists = response;
            });
        }
    }
});

