const fadeout =()=>{
	const loaderwrapper=
	document.queryselector('.wrapper');
	loaderwrapper.classlist.add('fade');
}
window.addEventListener('load',fadeout)