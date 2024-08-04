.

<div class="btn-group"> 
<x-button 
color="secondary" 
:label="__('Pilihan')" 
dropdowntoggle 
toggle="dropdown" 
haspopup="true" 
expanded="false" 
display="static" 
:items="[ 
    ['label' => 'Action', 'href' => 'javascript:void(0);'], 
    ['label' => 'Another action', 'href' => 'javascript:void(0);'], 
    ['label' => 'Something else here', 'href' => 'javascript:void(0);'], 
    'divider', 
    ['label' => 'Separated link', 'href' => 'javascript:void(0);'], 
]" /> 
</div>
