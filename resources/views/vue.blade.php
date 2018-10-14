<!DOCTYPE html>
<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css">

    <style>
        .completed{text-decoration: line-through;}
    </style>
</head>
<body>
    <div id="app" class="container">

        <tabs>
            <tab name="About">
                <h1>About</h1>
            </tab>
            <tab name="Contact">
            <h1>Contact</h1>
            </tab>
            <tab name="Blog">
            <h1>Blog</h1>
            </tab>
        </tabs>

        <div class="row">
            <h3>@{{fullname}}</h3><br>
            <input type="text" v-model="first">
            <input type="text" v-model="last">
            <br><hr>
           <h3>@{{skill}}</h3>
            <input type="number" class="form-controll" v-model="point">
        </div>

        <counter subject="Like"></counter>
        <counter subject="Dislike"></counter>

        <form action="index.html" @submit.prevent="">
            <h2>Fill this Form</h2>
            <div class="form-group">
                <p class="text-danger" v-show="!message"> you must enter a message</p>
                <textarea class="form-control" v-model="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" v-show="message" @click="updateCount">Add @{{count}}</button>
            <button class="btn btn-danger text-white" @click="updateLike" v-cloak>Like @{{num}}</button>
        </form>

        <hr>
        <ul class="list-group">
            <li v-for="plan in plans">
                <plan :plan="plan" @activate="setActive(plan)" :active="actived"></plan>
            </li>
        </ul>

        <ul class="list-group">
            <li :class="[task.completed ? 'completed' : '' ,'list-group-item']" v-for="task in tasks">
                @{{task.body}} & @{{ task.completed }}
            </li>
        </ul>
    </div>
    <template id="counter-template">
        <div>
            <h2>@{{subject}}</h2>
            <button class="btn btn-success" @click="likesCount+=1">Like @{{likesCount}}</button>
        </div>
    </template>
    <template id="plan-template">
        <div>
            <div class="text-body">@{{plan.name}}: <label class="text-danger">$</label>@{{plan.price}}</div>
            <button @click="activate" class="btn btn-primary btn-sm" v-if="!isActive">
                {{--@if(@{{isUpgrade  'Upgrade'}})--}}
                    {{--@endif--}}
                {{--@{{isUpgrade}}--}}
                {{--@{{ isUpgrade ? 'Upgrade' : 'Down}}--}}
                @{{isUpgrade ? 'Upgrade' : 'Downgrade'}}
            </button>
            <button v-else class="btn btn-primary btn-sm" disabled>Selected</button>
        </div>
    </template>


<script>
    // import {Vue} from "../../node_modules/vue/types/vue";

    Vue.component('tabs',{
        template: `
            <div class="tabs">
                <ul>
                    <li class="is-active"><a>Picture</a></li>
                    <li><a>Music</a></li>
                    <li><a>Video</a></li>
                    <li><a>Documentation</a></li>
                </ul>
            </div>
            `,
    });

    Vue.component('counter' , {
        template: '#counter-template',
        props: ['subject'],
        data:function () {
            return{
                likesCount:0,
            }
        }
        });

    // Vue.component('plan',{
    //     template: '#plan-template',
    //     props: ['plan', 'active'],
    // });

    var app = new Vue({
        el: '#app',
        data: {
            message: 'aaa',
            count: 0,
            num: 0,
            point: 170,
            first: 'Hamid',
            last: 'Pahlevani',
            // fullname: 'Hamid Pahlevani',

            tasks:[
                {body: 'Go to the restaurant' , completed: false},
                {body: 'Go to the office' , completed: false},
                {body: 'Go to the bank' , completed: true},
            ],

            plans:[
                {name:'Ultimate',price:500},
                {name:'Expert',price: 300},
                {name:'Professional',price:100},
                {name:'Simple',price:50},
                {name:'Free',price:0},
            ],
            actived:{}

        },

        methods: {
            handle: function () {
                alert('Done')
            },
            setActive: function(plan){
                this.actived = plan;
            },
            updateCount: function () {
                this.count += 1;
            },
            updateLike: function () {
                this.num += 1;
            },
        },
        components:{
            plan:{
                template: '#plan-template',
                props: ['plan', 'active'],
                methods: {
                    activate: function () {
                        this.$emit('activate', this.plan);
                    }
                },
                computed: {
                    isActive: function () {
                        return (this.active === this.plan);
                    },
                    isUpgrade:function () {
                        return (this.active.price < this.plan.price);
                    }
                },
            }
        },
        computed: {
            skill: function () {
                if(this.point <=100){
                    return 'Mobtadi';
                }
                return 'Pishrafte';
            },
            fullname: function () {
                return this.first + ' ' + this.last;
            },
        },

        // watch:{
        //     first: function (first) {
        //         this.fullname = first + ' ' + this.last;
        //     },
        //     last: function (last) {
        //         this.fullname = this.first + ' ' + last;
        //     },
        // },

    });
</script>
</body>
</html>
