//adapted from example code 'benskitchen.com'
var bSwitch = true;
var bLightSwitch = true;



// function headlight() {
//     if (document.getElementById('eSheep__Nav').getAttribute('headlight') != 'true')
//         document.getElementById('eSheep__Nav').setAttribute('headlight', 'true');
//     else
//         document.getElementById('model__Nav').setAttribute('headlight', 'false');
// }

// function light1() {
//     bLightSwitch = !bLightSwitch;
//     document.getElementById('models__light').setAttribute('on', bLightSwitch.toString());
// }

// function wireframe() {
//     var e = document.getElementById('the_x3delement');
//     e.runtime.togglePoints(true);
//     e.runtime.togglePoints(true);
// }

// function showAll1() {
//     //alert('Was called after 2 seconds');
//     var e = document.getElementById('the_x3delement');
//     e.runtime.showAll(0);
// }



var spinning = false;

function spin()
{
	spinning = !spinning;
	document.getElementById('model__Timer').setAttribute('enabled', spinning.toString());
    document.getElementById('models__Timer').setAttribute('enabled', spinning.toString());
    document.getElementById('modelz__Timer').setAttribute('enabled', spinning.toString());
    document.getElementById('modelc__Timer').setAttribute('enabled', spinning.toString());
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__Timer').setAttribute('enabled', spinning.toString());
    document.getElementById('models__Timer').setAttribute('enabled', spinning.toString());
    document.getElementById('modelz__Timer').setAttribute('enabled', spinning.toString());
    document.getElementById('modelc__Timer').setAttribute('enabled', spinning.toString());
}

function animateModel()
{
    if(document.getElementById('model__Timer').getAttribute('enabled')!= 'true')
        document.getElementById('model__Timer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__Timer').setAttribute('enabled', 'false');
    
    if(document.getElementById('models__Timer').getAttribute('enabled')!= 'true')
        document.getElementById('models__Timer').setAttribute('enabled', 'true');
    else
        document.getElementById('models__Timer').setAttribute('enabled', 'false');
    
    if(document.getElementById('modelc__Timer').getAttribute('enabled')!= 'true')
        document.getElementById('modelc__Timer').setAttribute('enabled', 'true');
    else
        document.getElementById('modelc__Timer').setAttribute('enabled', 'false');
    
    if(document.getElementById('modelz__Timer').getAttribute('enabled')!= 'true')
        document.getElementById('modelz__Timer').setAttribute('enabled', 'true');
    else
        document.getElementById('modelz__Timer').setAttribute('enabled', 'false');
}

function wireframe()
{
	var e = document.getElementById('model');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var lightOn = true;

function headLight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function pointLight()
{
	lightOn = !lightOn;
	document.getElementById('LIGHT_Light_1').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function omniLight()
{
	lightOn = !lightOn;
	document.getElementById('model__omniLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}


function light()
{
	document.getElementById('model__pointLight').setAttribute('on', 'false');
}

function cameraFront()
{
	document.getElementById('model__cameraFront').setAttribute('bind', 'true');
    document.getElementById('models__cameraRight').setAttribute('bind', 'true');
    document.getElementById('modelz__cameraFront').setAttribute('bind', 'true');
    document.getElementById('modelc__cameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__cameraBack').setAttribute('bind', 'true');
    document.getElementById('models__cameraLeft').setAttribute('bind', 'true');
    document.getElementById('modelz__cameraBack').setAttribute('bind', 'true');
    document.getElementById('modelc__cameraBack').setAttribute('bind', 'true');
}



function cameraLeft()
{
	document.getElementById('model__cameraLeft').setAttribute('bind', 'true');
    document.getElementById('modelz__cameraLeft').setAttribute('bind', 'true');
    document.getElementById('models__cameraBack').setAttribute('bind', 'true');
    document.getElementById('modelc__cameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__cameraRight').setAttribute('bind', 'true');
    document.getElementById('models__cameraFront').setAttribute('bind', 'true');
    document.getElementById('modelz__cameraRight').setAttribute('bind', 'true');
    document.getElementById('modelc__cameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__cameraTop').setAttribute('set_bind', 'true');
    document.getElementById('models__cameraTop').setAttribute('set_bind', 'true');
    document.getElementById('modelz__cameraTop').setAttribute('set_bind', 'true');
    document.getElementById('modelc__cameraTop').setAttribute('set_bind', 'true');
}


function cameraBottom()
{
	document.getElementById('model__cameraBottom').setAttribute('set_bind', 'true');
    document.getElementById('models__cameraBottom').setAttribute('set_bind', 'true');
    document.getElementById('modelz__cameraBottom').setAttribute('set_bind', 'true');
    document.getElementById('modelc__cameraBottom').setAttribute('set_bind', 'true');
}

