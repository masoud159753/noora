sortableHandle = document.getElementById('sortableHandle'),
new Sortable(sortableHandle, {
	handle: '.sortable-handle',
	animation: 150
});

sortableBasic = document.getElementById('sortableBasic'),
new Sortable(sortableBasic, {	
	animation: 150
});


sortableCloning1 = document.getElementById('sortableCloning1'),
sortableCloning2 = document.getElementById('sortableCloning2'),

new Sortable(sortableCloning1, {
	group: {
        name: 'shared',
        pull: 'clone'
    },
    animation: 150
});
new Sortable(sortableCloning2, {
	group: {
        name: 'shared',
        pull: 'clone'
    },
    animation: 150
});


sortableGrid = document.getElementById('sortableGrid'),
new Sortable(sortableGrid, {
    swapThreshold: 1,
    animation: 150
});