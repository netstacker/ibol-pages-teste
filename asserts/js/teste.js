google.maps.__gjsload__('stats', function(_){var rX=function(){this.j=new _.Ll},sX=function(a){var b=0,c=0;a.j.forEach(function(a){b+=a.qn;c+=a.Rm});return c?b/c:0},tX=function(a){this.B=a||[]},uX=function(a){this.B=a||[]},vX=function(){var a;_.vg[35]?a=_.H(_.Bc(_.V),11):a=_.Xq;var b=window.document;this.A=_.Ah;this.l=a+"/maps/gen_204";this.m=b},wX=function(a,b,c){var d=[];_.bk(a,function(a,c){d.push(c+b+a)});return d.join(c)},xX=function(a){var b={};_.bk(a,function(a,d){b[(0,window.encodeURIComponent)(d)]=(0,window.encodeURIComponent)(a).replace(/%7C/g,
"|")});return wX(b,":",",")},yX=function(a,b,c,d){var e={};e.host=window.document.location&&window.document.location.host||window.location.host;e.v=a;e.r=Math.round(1/b);c&&(e.client=c);d&&(e.key=d);return e},zX=function(a,b,c,d){var e=_.G(_.V,0,1);this.C=a;this.F=b;this.A=e;this.l=c;this.m=d;this.j=new _.Ll;this.D=_.Xa()},AX=function(a,b,c,d,e){this.D=a;this.F=b;this.C=c;this.m=d;this.A=e;this.l={};this.j=[]},BX=function(a,b,c){var d=_.Dh;this.m=a;_.S.bind(this.m,"set_at",this,this.A);_.S.bind(this.m,
"insert_at",this,this.A);this.D=b;this.F=d;this.C=c;this.l=0;this.j={};this.A()},DX=function(a,b,c,d,e){var f=_.G(_.V,23,500);var g=_.G(_.V,22,2);this.H=a;this.J=b;this.K=f;this.A=g;this.F=c;this.C=d;this.D=e;this.l=new _.Ll;this.j=0;this.m=_.Xa();CX(this)},CX=function(a){window.setTimeout(function(){EX(a);CX(a)},Math.min(a.K*Math.pow(a.A,a.j),2147483647))},EX=function(a){var b=yX(a.J,a.F,a.C,a.D);b.t=a.j+"-"+(_.Xa()-a.m);a.l.forEach(function(a,d){a=a();0<a&&(b[d]=Number(a.toFixed(2))+(_.Kk()?"-if":
""))});a.H.j({ev:"api_snap"},b);++a.j},FX=function(){this.l=_.H(_.V,6);this.m=_.H(_.V,16);this.j=new vX;_.Ch&&new BX(_.Ch,(0,_.z)(this.j.j,this.j),!!this.l);var a=_.H(new _.wc(_.V.B[3]),1);this.J=a.split(".")[1]||a;this.K={};this.F={};this.D={};this.ga={};this.H=_.G(_.V,0,1);_.zh&&(this.C=new DX(this.j,this.J,this.H,this.l,this.m));this.A=new tX;this.A.B[1]=_.H(new _.wc(_.V.B[3]),1);this.l&&(this.A.B[2]=this.l);this.m&&(this.A.B[3]=this.m)};
rX.prototype.l=function(a,b,c){this.j.set(_.Jd(a),{qn:b,Rm:c})};var GX;_.A(tX,_.E);_.A(uX,_.E);vX.prototype.j=function(a,b){b=b||{};var c=_.mk().toString(36);b.src="apiv3";b.token=this.A;b.ts=c.substr(c.length-6);a.cad=xX(b);a=wX(a,"=","&");a=this.l+"?target=api&"+a;this.m.createElement("img").src=a;(b=_.y.__gm_captureCSI)&&b(a)};zX.prototype.H=function(a,b){b=_.r(b)?b:1;this.j.isEmpty()&&window.setTimeout((0,_.z)(function(){var a=yX(this.F,this.A,this.l,this.m);a.t=_.Xa()-this.D;var b=this.j;_.Ml(b);for(var e={},f=0;f<b.j.length;f++){var g=b.j[f];e[g]=b.l[g]}_.pu(a,e);this.j.clear();this.C.j({ev:"api_maprft"},a)},this),500);b=this.j.get(a,0)+b;this.j.set(a,b)};AX.prototype.H=function(a){this.l[a]||(this.l[a]=!0,this.j.push(a),2>this.j.length&&_.jv(this,this.J,500))};AX.prototype.J=function(){for(var a=yX(this.F,this.C,this.m,this.A),b=0,c;c=this.j[b];++b)a[c]="1";a.hybrid=+_.xk();this.j.length=0;this.D.j({ev:"api_mapft"},a)};BX.prototype.A=function(){for(var a;a=this.m.removeAt(0);){var b=a.ym;a=a.timestamp-this.F;++this.l;this.j[b]||(this.j[b]=0);++this.j[b];if(20<=this.l&&!(this.l%5)){var c={};c.s=b;c.sr=this.j[b];c.tr=this.l;c.te=a;c.hc=this.C?"1":"0";this.D({ev:"api_services"},c)}}};DX.prototype.register=function(a,b){this.l.set(a,b)};_.m=FX.prototype;_.m.zk=function(a){a=_.Jd(a);this.K[a]||(this.K[a]=new AX(this.j,this.J,this.H,this.l,this.m));return this.K[a]};_.m.xk=function(a){a=_.Jd(a);this.F[a]||(this.F[a]=new zX(this.j,this.J,this.l,this.m));return this.F[a]};_.m.fe=function(a){if(this.C){this.D[a]||(this.D[a]=new _.Ov,this.C.register(a,function(){return b.ob()}));var b=this.D[a];return b}};_.m.wk=function(a){if(this.C){this.ga[a]||(this.ga[a]=new rX,this.C.register(a,function(){return sX(b)}));var b=this.ga[a];return b}};
_.m.pl=function(a){if(_.zh){var b=this.A.clone(),c=Math.floor(_.Xa()/1E3);b.B[0]=c;c=new uX(_.I(b,5));c.B[0]=Math.round(1/this.H);c.B[1]=a;a=this.j;c={ev:"api_map_style"};var d=new _.Kn;GX||(GX={G:"issssm",I:["is"]});b=d.j(b.B,GX);c.pb=(0,window.encodeURIComponent)(b).replace(/%20/g,"+");b=wX(c,"=","&");a.m.createElement("img").src=a.l+"?target=api&"+b}};var HX=new FX;_.Pe("stats",HX);});