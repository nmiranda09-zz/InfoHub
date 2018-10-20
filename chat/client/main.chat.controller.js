reserveapp = angular.module('chatModule', []);

angular.module("MainChatApp",[
	"chatModule",
]);

(function () {
	"use strict";
	angular.module("chatModule").controller("MainChatController", MainChatController);

	MainChatController.$inject = ["$scope", "$http", "$timeout"];

	function MainChatController($scope, $http, $timeout) {

		var vm = this;

		vm.activeConversation = null;
		vm.chatText = '';
		
		vm.companies = [{
				id   : 'C0', 
				name : 'National Bureau of Investagation',
				acronym : 'NBI',
				conversationData : [{
						from : 'user',
						to : 'agent',
						msg : 'Hi',
					},{
						from : 'agent',
						to : 'user',
						msg : 'hello, how can i help you ?',
					}, {
						from : 'user',
						to : 'agent',
						msg : 'i would like to inquire about my NBI status ?',
					}
				],
				botQuestionData : [{
						question : "How do I ensure that competitors aren't contacting the same companies as me and use the same data from the survey?",
						answer : "The NBI offers partners the possibility of using and sharing the platform with whomever they wish to. Your contacts get access to the platform via a unique url e.g. magnetix.networkedbusiness.org. We do not control how or to whom you share this. Partners share their unique url via media outlets like newsletters, ads, social media, etc. "+
"If two or more partners invite the same contact it is up to the contact to choose which invitation he/she wishes to accept. When a company signs up via your launch site, only you get the contact info of the company. And the company is the only one that can see their non-anonymized data. You can request access to the data of one of your contacts and the company can choose to grant or deny access to data. ",
					},{
						question : "How can companies benchmark themselves against other companies/industries if they’re alone in that industry/market?",
						answer : "When companies take the survey and get access to the dashboard, there are two advantages:\n"+
								 "1.) They are presented with and forced to reflect upon a structured framework i.e. a map, of how companies can utilize the five technologies, across six business functions. Companies can reflect on the topics they need to consider further when they work with them strategically."+ 
								  "This process is a learning experience. Companies get to see new potential and gain new insights. The structured analysis of the company is a great outset for creating new strategies and projects.\n"+
								  "2.)Companies are able to benchmark themselves against a chosen benchmark and see how they stack up against competitors. Users can define their benchmark across three dimensions: Country, Industry and Company Size (measured in number of employees)."+ 
									"Users can always see how many people are represented in the benchmark and assess how big a say the numbers have. The benchmark feature will increase in value as more and more users come aboard.",
					}
				]
			},{
				id   : 'C1',
				name : 'Philippine Health Association',
				acronym : 'PHILHEALTH',
				conversationData : [{
						from : 'user',
						to : 'agent',
						msg : 'Hello, How is your day ?',
					}
				],
				botQuestionData : [{
						question : "Who can apply for Membership ?",
						answer : "By Law, all Government, Private employees including OFW's are required to be a member of PhilHealth. Others can become a member of Philhealth by applying as Voluntary / Self Employed under the Individual Paying Member category. The government also currently is enrolling poor families under the so-called and often controversial "+
						" Sponsored Program",
					},{
						question : "What is the age limit of becoming a PhilHealth member ?",
						answer : "There is no age limit, although generally if you become 21 years old, should have your own membership already. Those who are below the age of 21 can be declared as dependents of their Parents, if no parents are available, they can apply for membership provided a guardian is available to co sign their membership.",
					},{
						question : "Who can be declared dependents of PhilHealth member ?",
						answer : "1.) Legal Spouse of the Member who is not a PhilHealth Member him/herself."+
						         "2.) Children 20 years old and below."+
						         "3.) Parents 60 years old and above who is not a Retiree Member him/herself."+
						         "4.) Children 21 years or older who have congenital disability, either physical or mental, or any disability acquired that renders them totally dependent on the member for support.",
					}
				]
			},{
				id   : 'C2',
				name : 'Department of Justice',
				acronym : 'DOJ',
				conversationData : []
			},{
				id   : 'C3',
				name : 'Bureau of Internal Affairs',
				acronym : 'BIR'
			},{
				id   : 'C4',
				name : 'National Food Association',
				acronym : 'NFA',
				conversationData : []
			},{
				id   : 'C5',
				name : 'Department of Environment and Natural Resources',
				acronym : 'DENR',
				conversationData : []
			}
		];

		// functions

		vm.openConversation = openConversation;
		vm.sendQuestion = sendQuestion;
		vm.sendMessage = sendMessage;

		function openConversation(id) {
			$('.company-list .item').removeClass('active');
			var obj = vm.companies.find(item => item.id === id)

			vm.activeConversation = obj ? obj : null;

			if(vm.activeConversation){
				vm.activeConversation.comapnyName = obj.name;
				vm.activeConversation.comapnyAcronym = obj.acronym;
			}

			$timeout(function() {
				$('#company-'+id).addClass('active');
			}, 0);
		}

		function sendQuestion(data){
			var dataQ = {
				from : 'user',
				to : 'agent',
				msg : data.question,
			}

			var dataA = {
				from : 'agent',
				to : 'user',
				msg : data.answer,
			}

			vm.activeConversation.conversationData.push(dataQ);

			$timeout( function(){
	           vm.activeConversation.conversationData.push(dataA);
	        }, 1000 );
		}

		function sendMessage() {
			var data = {
				from : 'user',
				to : 'agent',
				msg : vm.chatText,
			}

			vm.activeConversation.conversationData.push(data);
			vm.chatText = '';
		}


		vm.sampleData = "Hello";
		

		vm.openConversation('C0');
	}
})();