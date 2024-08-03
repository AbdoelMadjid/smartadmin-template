.

<div class="btn-group dropleft"> 
<x-button 
color="danger" 
:label="__('Pilihan')" 
dropdowntoggle toggle="dropdown" 
haspopup="true" 
expanded="false" 
:items="[ 
    ['label' => 'Action', 'href' => 'javascript:void(0);'], 
    ['label' => 'Another action', 'href' => 'javascript:void(0);'], 
    ['label' => 'Something else here', 'href' => 'javascript:void(0);'], 
    'divider', 
    ['label' => 'Separated link', 'href' => 'javascript:void(0);'], 
]" /> 
</div>
