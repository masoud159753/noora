taskWrapper1 = document.getElementById('taskWrapper1'),
taskWrapper2 = document.getElementById('taskWrapper2'),
taskWrapper3 = document.getElementById('taskWrapper3'),
taskWrapper4 = document.getElementById('taskWrapper4'),

new Sortable(taskWrapper1, {
	group: 'shared',
	animation: 150
});
new Sortable(taskWrapper2, {
	group: 'shared',
	animation: 150
});
new Sortable(taskWrapper3, {
	group: 'shared',
	animation: 150
});
new Sortable(taskWrapper4, {
	group: 'shared',
	animation: 150
});