.

<div class="btn-group"> 
<x-button 
color="primary" 
icon="print" 
:label="__('Print')" 
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
