!function(t,n){"object"==typeof exports&&"object"==typeof module?module.exports=n():"function"==typeof define&&define.amd?define([],n):"object"==typeof exports?exports.Placeload=n():t.Placeload=n()}(this,function(){return function(t){function n(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}var e={};return n.m=t,n.c=e,n.i=function(t){return t},n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{configurable:!1,enumerable:!0,get:r})},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},n.p="",n(n.s=23)}([function(t,n,e){function r(t){return function n(e){return 0===arguments.length||o(e)?n:t.apply(this,arguments)}}var o=e(6);t.exports=r},function(t,n,e){function r(t){return function n(e,r){switch(arguments.length){case 0:return n;case 1:return u(e)?n:o(function(n){return t(e,n)});default:return u(e)&&u(r)?n:u(e)?o(function(n){return t(n,r)}):u(r)?o(function(n){return t(e,n)}):t(e,r)}}}var o=e(0),u=e(6);t.exports=r},function(t,n,e){var r=e(0),o=e(59),u=r(function(t){return o(t,[])});t.exports=u},function(t,n,e){var r=e(8);t.exports={baseMap:function(t){return t(this.value)},getEquals:function(t){return function(n){return n instanceof t&&r(this.value,n.value)}},extend:function(t,n){function e(){this.constructor=t}e.prototype=n.prototype,t.prototype=new e,t.super_=n.prototype},identity:function(t){return t},notImplemented:function(t){return function(){throw new Error(t+" is not implemented")}},notCallable:function(t){return function(){throw new Error(t+" cannot be called directly")}},returnThis:function(){return this},chainRecNext:function(t){return{isNext:!0,value:t}},chainRecDone:function(t){return{isNext:!1,value:t}},deriveAp:function(t){return function(n){return this.chain(function(e){return n.chain(function(n){return t.of(e(n))})})}},deriveMap:function(t){return function(n){return this.chain(function(e){return t.of(n(e))})}}}},function(t,n){function e(t,n){switch(t){case 0:return function(){return n.apply(this,arguments)};case 1:return function(t){return n.apply(this,arguments)};case 2:return function(t,e){return n.apply(this,arguments)};case 3:return function(t,e,r){return n.apply(this,arguments)};case 4:return function(t,e,r,o){return n.apply(this,arguments)};case 5:return function(t,e,r,o,u){return n.apply(this,arguments)};case 6:return function(t,e,r,o,u,i){return n.apply(this,arguments)};case 7:return function(t,e,r,o,u,i,c){return n.apply(this,arguments)};case 8:return function(t,e,r,o,u,i,c,a){return n.apply(this,arguments)};case 9:return function(t,e,r,o,u,i,c,a,f){return n.apply(this,arguments)};case 10:return function(t,e,r,o,u,i,c,a,f,s){return n.apply(this,arguments)};default:throw new Error("First argument to _arity must be a non-negative integer no greater than ten")}}t.exports=e},function(t,n,e){var r=e(0),o=e(7),u=r(function(t){return o(t.length,t)});t.exports=u},function(t,n){function e(t){return null!=t&&"object"==typeof t&&!0===t["@@functional/placeholder"]}t.exports=e},function(t,n,e){var r=e(4),o=e(0),u=e(1),i=e(44),c=u(function(t,n){return 1===t?o(n):r(t,i(t,[],n))});t.exports=c},function(t,n,e){var r=e(1),o=e(46),u=r(function(t,n){return o(t,n,[],[])});t.exports=u},function(t,n,e){function r(t,n){return function(){var e=arguments.length;if(0===e)return n();var r=arguments[e-1];return o(r)||"function"!=typeof r[t]?n.apply(this,arguments):r[t].apply(r,Array.prototype.slice.call(arguments,0,e-1))}}var o=e(11);t.exports=r},function(t,n){function e(t,n){return Object.prototype.hasOwnProperty.call(n,t)}t.exports=e},function(t,n){t.exports=Array.isArray||function(t){return null!=t&&t.length>=0&&"[object Array]"===Object.prototype.toString.call(t)}},function(t,n,e){var r=e(0),o=e(10),u=e(51),i=!{toString:null}.propertyIsEnumerable("toString"),c=["constructor","valueOf","isPrototypeOf","toString","propertyIsEnumerable","hasOwnProperty","toLocaleString"],a=function(){"use strict";return arguments.propertyIsEnumerable("length")}(),f=function(t,n){for(var e=0;e<t.length;){if(t[e]===n)return!0;e+=1}return!1},s="function"!=typeof Object.keys||a?function(t){if(Object(t)!==t)return[];var n,e,r=[],s=a&&u(t);for(n in t)!o(n,t)||s&&"length"===n||(r[r.length]=n);if(i)for(e=c.length-1;e>=0;)n=c[e],o(n,t)&&!f(r,n)&&(r[r.length]=n),e-=1;return r}:function(t){return Object(t)!==t?[]:Object.keys(t)},p=r(s);t.exports=p},function(t,n,e){function r(t){if(!(this instanceof r))return new r(t);this.value=t}var o=e(2),u=e(3);r.prototype["@@type"]="ramda-fantasy/Identity",r.of=function(t){return new r(t)},r.prototype.of=r.of,r.prototype.map=function(t){return new r(t(this.value))},r.prototype.ap=function(t){return t.map(this.value)},r.prototype.chain=function(t){return t(this.value)},r.chainRec=r.prototype.chainRec=function(t,n){for(var e=u.chainRecNext(n);e.isNext;)e=t(u.chainRecNext,u.chainRecDone,e.value).get();return r(e.value)},r.prototype.get=function(){return this.value},r.prototype.equals=u.getEquals(r),r.prototype.toString=function(){return"Identity("+o(this.value)+")"},t.exports=r},function(t,n,e){function r(t,n){switch(arguments.length){case 0:throw new TypeError("no arguments to Tuple");case 1:return function(n){return new o(t,n)};default:return new o(t,n)}}function o(t,n){this[0]=t,this[1]=n,this.length=2}function u(t){t.forEach(function(t){if("function"!=typeof t.concat)throw new TypeError(i(t)+" must be a semigroup to perform this operation")})}var i=e(2),c=e(8);r.fst=function(t){return t[0]},r.snd=function(t){return t[1]},o.prototype["@@type"]="ramda-fantasy/Tuple",o.prototype.concat=function(t){return u([this[0],this[1]]),r(this[0].concat(t[0]),this[1].concat(t[1]))},o.prototype.map=function(t){return r(this[0],t(this[1]))},o.prototype.ap=function(t){return u([this[0]]),r(this[0].concat(t[0]),this[1](t[1]))},o.prototype.equals=function(t){return t instanceof o&&c(this[0],t[0])&&c(this[1],t[1])},o.prototype.toString=function(){return"Tuple("+i(this[0])+", "+i(this[1])+")"},t.exports=r},function(t,n,e){function r(){if(0===arguments.length)throw new Error("compose requires at least one argument");return o.apply(this,u(arguments))}var o=e(64),u=e(67);t.exports=r},function(t,n,e){function r(t){return function n(e,r,c){switch(arguments.length){case 0:return n;case 1:return i(e)?n:u(function(n,r){return t(e,n,r)});case 2:return i(e)&&i(r)?n:i(e)?u(function(n,e){return t(n,r,e)}):i(r)?u(function(n,r){return t(e,n,r)}):o(function(n){return t(e,r,n)});default:return i(e)&&i(r)&&i(c)?n:i(e)&&i(r)?u(function(n,e){return t(n,e,c)}):i(e)&&i(c)?u(function(n,e){return t(n,r,e)}):i(r)&&i(c)?u(function(n,r){return t(e,n,r)}):i(e)?o(function(n){return t(n,r,c)}):i(r)?o(function(n){return t(e,n,c)}):i(c)?o(function(n){return t(e,r,n)}):t(e,r,c)}}}var o=e(0),u=e(1),i=e(6);t.exports=r},function(t,n){function e(t){return"[object String]"===Object.prototype.toString.call(t)}t.exports=e},function(t,n,e){function r(t,n,e){for(var r=0,o=e.length;r<o;){if((n=t["@@transducer/step"](n,e[r]))&&n["@@transducer/reduced"]){n=n["@@transducer/value"];break}r+=1}return t["@@transducer/result"](n)}function o(t,n,e){for(var r=e.next();!r.done;){if((n=t["@@transducer/step"](n,r.value))&&n["@@transducer/reduced"]){n=n["@@transducer/value"];break}r=e.next()}return t["@@transducer/result"](n)}function u(t,n,e,r){return t["@@transducer/result"](e[r](f(t["@@transducer/step"],t),n))}function i(t,n,e){if("function"==typeof t&&(t=a(t)),c(e))return r(t,n,e);if("function"==typeof e["fantasy-land/reduce"])return u(t,n,e,"fantasy-land/reduce");if(null!=e[s])return o(t,n,e[s]());if("function"==typeof e.next)return o(t,n,e);if("function"==typeof e.reduce)return u(t,n,e,"reduce");throw new TypeError("reduce: list must be array or iterable")}var c=e(52),a=e(62),f=e(35),s="undefined"!=typeof Symbol?Symbol.iterator:"@@iterator";t.exports=i},function(t,n,e){"use strict";Object.defineProperty(n,"__esModule",{value:!0});var r={primaryColor:"",speed:"1s",spaceBetween:"0",marginLeft:"0",right:!1};n.default=r},function(t,n,e){"use strict";Object.defineProperty(n,"__esModule",{value:!0});var r=function(t,n,e){return t.style[n]=e,t},o=function(t,n){return t.className+=n,t},u=function t(n){return{width:function(e){return t(r(n,"width",e))},height:function(e){return t(r(n,"height",e))},marginTop:function(e){return t(r(n,"margin-top",e))},marginLeft:function(e){return t(r(n,"margin-left",e))},addClass:function(e){return t(o(n,e))},hide:function(){return t(r(n,"display","none"))},toDOM:function(){return n}}};n.default=u},function(t,n,e){t.exports={Either:e(26),Future:e(27),Identity:e(13),IO:e(28),lift2:e(32),lift3:e(33),Maybe:e(29),Reader:e(30),State:e(31),Tuple:e(14)}},function(t,n,e){var r=e(24);"string"==typeof r&&(r=[[t.i,r,""]]);var o={};o.transform=void 0;e(71)(r,o);r.locals&&(t.exports=r.locals)},function(t,n,e){"use strict";function r(t){return t&&t.__esModule?t:{default:t}}function o(t){if(Array.isArray(t)){for(var n=0,e=Array(t.length);n<t.length;n++)e[n]=t[n];return e}return Array.from(t)}var u=Object.assign||function(t){for(var n=1;n<arguments.length;n++){var e=arguments[n];for(var r in e)Object.prototype.hasOwnProperty.call(e,r)&&(t[r]=e[r])}return t};e(22);var i=e(21),c=e(19),a=r(c),f=e(20),s=r(f),p=i.Either.Right,l=i.Either.Left,h={$:function(t){return v(d(t),y(t))}},y=function(t){var n=document.querySelector(t);return n?p(n):l("Don't found "+t+" element")},d=function(t){return(0,i.IO)(function(){return y(t).chain(function(t){var n=(0,s.default)(document.createElement("div")).addClass("placeload-background").toDOM();return t.appendChild(n),p({container:t,placeload:n,elems:[]})})})},v=function t(n,e){return{config:function(r){return t(x(n,r),e)},line:function(r){return t(g(r,n),e)},fold:function(t,r){return n.runIO().either(t,r),{remove:function(){e.map(function(t){t.parentNode.removeChild(t)})}}},inspect:function(){return console.log("IO: ",n.toString())}}},g=function(t,n){return n.map(function(n){return n.map(function(e){var r=document.createElement("div");return(0,s.default)(r).addClass("placeload-masker"),t(m(n,r)),u({},n.value,{elems:[].concat(o(n.value.elems),[r])})})})},m=function t(n,e){return{width:function(r){return t(b(n,e,"width",r),e)},height:function(r){return t(b(n,e,"height",r),e)}}},x=function(t,n){return t.map(function(t){return t.chain(function(e){var r=u({defaultOptions:a.default},n),o=e.placeload.style.height||0,i=parseInt(o)+parseInt(r.spaceBetween),c=(0,s.default)(document.createElement("div")).width("100%").height(r.spaceBetween).marginTop(o).addClass("placeload-masker").toDOM();return(0,s.default)(e.placeload).height(i+"px"),e.placeload.style.animationDuration=r.speed,e.placeload.appendChild(c),t})})},b=function(t,n,e,r){return t.map(function(t){var o=t.placeload.style.height||0;switch(e){case"width":(0,s.default)(n).width("100%").marginLeft(r+"%").marginTop(o);break;case"height":(0,s.default)(n).height(r+"px"),(0,s.default)(t.placeload).height(parseInt(o)+r+"px")}return t.placeload.appendChild(n),t})};t.exports=h},function(t,n,e){n=t.exports=e(25)(!1),n.push([t.i,"/* Animation */\n@keyframes placeHolderShimmer{\n    0%{\n        background-position: -468px 0\n    }\n    100%{\n        background-position: 468px 0\n    }\n}\n\n.placeload-background {\n    animation-duration: 1s;\n    animation-fill-mode: forwards;\n    animation-iteration-count: infinite;\n    animation-name: placeHolderShimmer;\n    animation-timing-function: linear;\n    background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);\n    background-size: 1000px 104px;\n    height: 0;\n    position: relative;\n    overflow: hidden;\n}\n.placeload-masker {\n    background: #fff;\n    position: absolute;\n}\n",""])},function(t,n){function e(t,n){var e=t[1]||"",o=t[3];if(!o)return e;if(n&&"function"==typeof btoa){var u=r(o);return[e].concat(o.sources.map(function(t){return"/*# sourceURL="+o.sourceRoot+t+" */"})).concat([u]).join("\n")}return[e].join("\n")}function r(t){return"/*# sourceMappingURL=data:application/json;charset=utf-8;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(t))))+" */"}t.exports=function(t){var n=[];return n.toString=function(){return this.map(function(n){var r=e(n,t);return n[2]?"@media "+n[2]+"{"+r+"}":r}).join("")},n.i=function(t,e){"string"==typeof t&&(t=[[null,t,""]]);for(var r={},o=0;o<this.length;o++){var u=this[o][0];"number"==typeof u&&(r[u]=!0)}for(o=0;o<t.length;o++){var i=t[o];"number"==typeof i[0]&&r[i[0]]||(e&&!i[2]?i[2]=e:e&&(i[2]="("+i[2]+") and ("+e+")"),n.push(i))}},n}},function(t,n,e){function r(t,n){switch(arguments.length){case 0:throw new TypeError("no arguments to Either");case 1:return function(n){return null==n?r.Left(t):r.Right(n)};default:return null==n?r.Left(t):r.Right(n)}}function o(t){this.value=t}function u(t){this.value=t}var i=e(5),c=e(2),a=e(3);r.prototype["@@type"]="ramda-fantasy/Either",r.prototype.map=a.returnThis,r.of=r.prototype.of=function(t){return r.Right(t)},r.prototype.chain=a.returnThis,r.either=i(function(t,n,e){if(e instanceof u)return t(e.value);if(e instanceof o)return n(e.value);throw new TypeError("invalid type given to Either.either")}),r.isLeft=function(t){return t.isLeft},r.isRight=function(t){return t.isRight},a.extend(o,r),o.prototype.isRight=!0,o.prototype.isLeft=!1,o.prototype.map=function(t){return new o(t(this.value))},o.prototype.ap=function(t){return t.map(this.value)},o.prototype.chain=function(t){return t(this.value)},r.chainRec=r.prototype.chainRec=function(t,n){for(var e,o=a.chainRecNext(n);o.isNext;){if(e=t(a.chainRecNext,a.chainRecDone,o.value),r.isLeft(e))return e;o=e.value}return r.Right(o.value)},o.prototype.bimap=function(t,n){return new o(n(this.value))},o.prototype.extend=function(t){return new o(t(this))},o.prototype.toString=function(){return"Either.Right("+c(this.value)+")"},o.prototype.equals=a.getEquals(o),r.Right=function(t){return new o(t)},a.extend(u,r),u.prototype.isLeft=!0,u.prototype.isRight=!1,u.prototype.ap=a.returnThis,u.prototype.bimap=function(t){return new u(t(this.value))},u.prototype.extend=a.returnThis,u.prototype.toString=function(){return"Either.Left("+c(this.value)+")"},u.prototype.equals=a.getEquals(u),r.Left=function(t){return new u(t)},r.prototype.either=function(t,n){return this.isLeft?t(this.value):n(this.value)},t.exports=r},function(t,n,e){function r(t,n){return function(e){try{return n(e)}catch(n){t(n)}}}function o(t){if(!(this instanceof o))return new o(t);this._fork=t}var u=e(63),i=e(37),c=e(2),a=e(5),f=e(3);o.prototype["@@type"]="ramda-fantasy/Future",o.prototype.fork=function(t,n){this._fork(t,r(t,n))},o.prototype.map=function(t){return this.chain(function(n){return o.of(t(n))})},o.prototype.ap=function(t){var n=this;return new o(function(e,o){var i,c,a=u(e),f=r(a,function(){if(null!=i&&null!=c)return o(i(c))});n._fork(a,function(t){i=t,f()}),t._fork(a,function(t){c=t,f()})})},o.of=function(t){return new o(function(n,e){return e(t)})},o.prototype.of=o.of,o.prototype.chain=function(t){return new o(function(n,e){return this._fork(function(t){return n(t)},r(n,function(r){return t(r)._fork(n,e)}))}.bind(this))},o.chainRec=o.prototype.chainRec=function(t,n){return o(function(e,r){return function n(o){for(var u=null,i=f.chainRecNext(o),c=function(t){null===u?(u=!0,i=t):(t.isNext?n:r)(t.value)};i.isNext;)if(u=null,t(f.chainRecNext,f.chainRecDone,i.value).fork(e,c),!0!==u)return void(u=!1);r(i.value)}(n)})},o.prototype.chainReject=function(t){return new o(function(n,e){return this._fork(r(n,function(r){return t(r)._fork(n,e)}),function(t){return e(t)})}.bind(this))},o.prototype.bimap=function(t,n){var e=this;return new o(function(o,u){e._fork(r(o,function(n){o(t(n))}),r(o,function(t){u(n(t))}))})},o.reject=function(t){return new o(function(n){n(t)})},o.prototype.toString=function(){return"Future("+c(this._fork)+")"},o.cache=function(t){function n(t,n){c.push({REJECTED:t,RESOLVED:n})}function e(n,e){return u="PENDING",t._fork(f("REJECTED",n),f("RESOLVED",e))}var r,u="IDLE",c=[],f=a(function(t,n,e){u=t,r=e,n(e),i(function(t){t[u](r)},c)});return new o(function(t,o){switch(u){case"IDLE":e(t,o);break;case"PENDING":n(t,o);break;case"REJECTED":t(r);break;case"RESOLVED":o(r)}})},t.exports=o},function(t,n,e){function r(t){if(!(this instanceof r))return new r(t);this.fn=t}var o=e(15),u=e(2),i=e(3);t.exports=r,r.prototype["@@type"]="ramda-fantasy/IO",r.prototype.chain=function(t){var n=this;return new r(function(){var e=t(n.fn.apply(n,arguments));return e.fn.apply(e,arguments)})},r.chainRec=r.prototype.chainRec=function(t,n){return new r(function(){for(var e=i.chainRecNext(n);e.isNext;)e=t(i.chainRecNext,i.chainRecDone,e.value).fn();return e.value})},r.prototype.map=function(t){return new r(o(t,this.fn))},r.prototype.ap=function(t){return this.chain(function(n){return t.map(n)})},r.runIO=function(t){return t.runIO.apply(t,[].slice.call(arguments,1))},r.prototype.runIO=function(){return this.fn.apply(this,arguments)},r.prototype.of=function(t){return new r(function(){return t})},r.of=r.prototype.of,r.prototype.toString=function(){return"IO("+u(this.fn)+")"}},function(t,n,e){function r(t){return null==t?f:r.Just(t)}function o(t){this.value=t}function u(){}var i=e(2),c=e(5),a=e(3);r.prototype["@@type"]="ramda-fantasy/Maybe",a.extend(o,r),o.prototype.isJust=!0,o.prototype.isNothing=!1,a.extend(u,r),u.prototype.isNothing=!0,u.prototype.isJust=!1;var f=new u;r.Nothing=function(){return f},r.Just=function(t){return new o(t)},r.of=r.Just,r.prototype.of=r.Just,r.isJust=function(t){return t.isJust},r.isNothing=function(t){return t.isNothing},r.maybe=c(function(t,n,e){return e.reduce(function(t,e){return n(e)},t)}),r.toMaybe=r,o.prototype.concat=function(t){return t.isNothing?this:this.of(this.value.concat(t.value))},u.prototype.concat=a.identity,o.prototype.map=function(t){return this.of(t(this.value))},u.prototype.map=a.returnThis,o.prototype.ap=function(t){return t.map(this.value)},u.prototype.ap=a.returnThis,o.prototype.chain=a.baseMap,u.prototype.chain=a.returnThis,r.chainRec=r.prototype.chainRec=function(t,n){for(var e,o=a.chainRecNext(n);o.isNext;){if(e=t(a.chainRecNext,a.chainRecDone,o.value),r.isNothing(e))return e;o=e.value}return r.Just(o.value)},o.prototype.datatype=o,u.prototype.datatype=u,o.prototype.equals=a.getEquals(o),u.prototype.equals=function(t){return t===f},r.prototype.isNothing=function(){return this===f},r.prototype.isJust=function(){return this instanceof o},o.prototype.getOrElse=function(){return this.value},u.prototype.getOrElse=function(t){return t},o.prototype.reduce=function(t,n){return t(n,this.value)},u.prototype.reduce=function(t,n){return n},o.prototype.toString=function(){return"Maybe.Just("+i(this.value)+")"},u.prototype.toString=function(){return"Maybe.Nothing()"},t.exports=r},function(t,n,e){function r(t){if(!(this instanceof r))return new r(t);this.run=t}var o=e(15),u=e(39),i=e(2),c=e(34);r.run=function(t){return t.run.apply(t,[].slice.call(arguments,1))},r.prototype["@@type"]="ramda-fantasy/Reader",r.prototype.chain=function(t){var n=this;return new r(function(e){return t(n.run(e)).run(e)})},r.prototype.ap=function(t){return this.chain(function(n){return t.map(n)})},r.prototype.map=function(t){return this.chain(function(n){return r.of(t(n))})},r.prototype.of=function(t){return new r(function(){return t})},r.of=r.prototype.of,r.ask=r(u),r.prototype.toString=function(){return"Reader("+i(this.run)+")"},r.T=function(t){var n=function t(n){if(!(this instanceof t))return new t(n);this.run=n};return n.lift=o(n,c),n.ask=n(t.of),n.prototype.of=n.of=function(e){return n(function(){return t.of(e)})},n.prototype.chain=function(t){var e=this;return n(function(n){return e.run(n).chain(function(e){return t(e).run(n)})})},n.prototype.map=function(t){return this.chain(function(e){return n.of(t(e))})},n.prototype.ap=function(t){var e=this;return n(function(n){return e.run(n).ap(t.run(n))})},n.prototype.toString=function(){return"ReaderT["+t.name+"]("+i(this.run)+")"},n},t.exports=r},function(t,n,e){function r(t){function n(t){if(!(this instanceof n))return new n(t);this._run=t}return n.prototype.run=function(t){return this._run(t)},n.prototype.eval=function(t){return i.fst(this.run(t))},n.prototype.exec=function(t){return i.snd(this.run(t))},n.prototype.chain=function(t){var e=this;return n(function(n){return e._run(n).chain(function(n){return t(i.fst(n))._run(i.snd(n))})})},n.of=n.prototype.of=function(e){return n(function(n){return t.of(i(e,n))})},n.prototype.ap=c.deriveAp(n),n.prototype.map=c.deriveMap(n),n.tailRec=o(function(e,r){return n(function(n){return t.tailRec(function(n){return e(i.fst(n))._run(i.snd(n)).chain(function(n){return t.of(i.fst(n).bimap(function(t){return i(t,i.snd(n))},function(t){return i(t,i.snd(n))}))})},i(r,n))})}),n.lift=function(e){return n(function(n){return e.chain(function(e){return t.of(i(e,n))})})},n.get=n(function(n){return t.of(i(n,n))}),n.gets=function(e){return n(function(n){return t.of(i(e(n),n))})},n.put=function(e){return n(function(n){return t.of(i(void 0,e))})},n.modify=function(e){return n(function(n){return t.of(i(void 0,e(n)))})},n}var o=e(5),u=e(13),i=e(14),c=e(3),a=r(u);a.T=r,a.prototype.run=function(t){return this._run(t).value},t.exports=a},function(t,n,e){var r=e(7);t.exports=r(3,function(t,n,e){return n.map(t).ap(e)})},function(t,n,e){var r=e(7);t.exports=r(4,function(t,n,e,r){return n.map(t).ap(e).ap(r)})},function(t,n,e){var r=e(0),o=r(function(t){return function(){return t}});t.exports=o},function(t,n,e){var r=e(4),o=e(1),u=o(function(t,n){return r(t.length,function(){return t.apply(n,arguments)})});t.exports=u},function(t,n,e){var r=e(1),o=e(45),u=e(47),i=e(53),c=e(18),a=e(61),f=e(12),s=r(o(["filter"],a,function(t,n){return i(n)?c(function(e,r){return t(n[r])&&(e[r]=n[r]),e},{},f(n)):u(t,n)}));t.exports=s},function(t,n,e){var r=e(9),o=e(1),u=o(r("forEach",function(t,n){for(var e=n.length,r=0;r<e;)t(n[r]),r+=1;return n}));t.exports=u},function(t,n,e){var r=e(1),o=r(function(t,n){return t===n?0!==t||1/t==1/n:t!==t&&n!==n});t.exports=o},function(t,n,e){var r=e(0),o=e(49),u=r(o);t.exports=u},function(t,n){function e(t){for(var n,e=[];!(n=t.next()).done;)e.push(n.value);return e}t.exports=e},function(t,n){function e(t){return function(){return!t.apply(this,arguments)}}t.exports=e},function(t,n,e){function r(t,n){return o(n,t,0)>=0}var o=e(50);t.exports=r},function(t,n){function e(t,n,e){for(var r=0,o=e.length;r<o;){if(t(n,e[r]))return!0;r+=1}return!1}t.exports=e},function(t,n,e){function r(t,n,e){return function(){for(var i=[],c=0,a=t,f=0;f<n.length||c<arguments.length;){var s;f<n.length&&(!u(n[f])||c>=arguments.length)?s=n[f]:(s=arguments[c],c+=1),i[f]=s,u(s)||(a-=1),f+=1}return a<=0?e.apply(this,i):o(a,r(t,i,e))}}var o=e(4),u=e(6);t.exports=r},function(t,n,e){function r(t,n,e){return function(){if(0===arguments.length)return e();var r=Array.prototype.slice.call(arguments,0),i=r.pop();if(!o(i)){for(var c=0;c<t.length;){if("function"==typeof i[t[c]])return i[t[c]].apply(i,r);c+=1}if(u(i)){return n.apply(null,r)(i)}}return e.apply(this,arguments)}}var o=e(11),u=e(54);t.exports=r},function(t,n,e){function r(t,n,e,r){function c(t,n){return o(t,n,e.slice(),r.slice())}var a=u(t),f=u(n);return!i(function(t,n){return!i(c,n,t)},f,a)}function o(t,n,e,u){if(f(t,n))return!0;var i=p(t);if(i!==p(n))return!1;if(null==t||null==n)return!1;if("function"==typeof t["fantasy-land/equals"]||"function"==typeof n["fantasy-land/equals"])return"function"==typeof t["fantasy-land/equals"]&&t["fantasy-land/equals"](n)&&"function"==typeof n["fantasy-land/equals"]&&n["fantasy-land/equals"](t);if("function"==typeof t.equals||"function"==typeof n.equals)return"function"==typeof t.equals&&t.equals(n)&&"function"==typeof n.equals&&n.equals(t);switch(i){case"Arguments":case"Array":case"Object":if("function"==typeof t.constructor&&"Promise"===c(t.constructor))return t===n;break;case"Boolean":case"Number":case"String":if(typeof t!=typeof n||!f(t.valueOf(),n.valueOf()))return!1;break;case"Date":if(!f(t.valueOf(),n.valueOf()))return!1;break;case"Error":return t.name===n.name&&t.message===n.message;case"RegExp":if(t.source!==n.source||t.global!==n.global||t.ignoreCase!==n.ignoreCase||t.multiline!==n.multiline||t.sticky!==n.sticky||t.unicode!==n.unicode)return!1}for(var l=e.length-1;l>=0;){if(e[l]===t)return u[l]===n;l-=1}switch(i){case"Map":return t.size===n.size&&r(t.entries(),n.entries(),e.concat([t]),u.concat([n]));case"Set":return t.size===n.size&&r(t.values(),n.values(),e.concat([t]),u.concat([n]));case"Arguments":case"Array":case"Object":case"Boolean":case"Number":case"String":case"Date":case"Error":case"RegExp":case"Int8Array":case"Uint8Array":case"Uint8ClampedArray":case"Int16Array":case"Uint16Array":case"Int32Array":case"Uint32Array":case"Float32Array":case"Float64Array":case"ArrayBuffer":break;default:return!1}var h=s(t);if(h.length!==s(n).length)return!1;var y=e.concat([t]),d=u.concat([n]);for(l=h.length-1;l>=0;){var v=h[l];if(!a(v,n)||!o(n[v],t[v],y,d))return!1;l-=1}return!0}var u=e(40),i=e(43),c=e(48),a=e(10),f=e(38),s=e(12),p=e(70);t.exports=o},function(t,n){function e(t,n){for(var e=0,r=n.length,o=[];e<r;)t(n[e])&&(o[o.length]=n[e]),e+=1;return o}t.exports=e},function(t,n){function e(t){var n=String(t).match(/^function (\w*)/);return null==n?"":n[1]}t.exports=e},function(t,n){function e(t){return t}t.exports=e},function(t,n,e){function r(t,n,e){var r,u;if("function"==typeof t.indexOf)switch(typeof n){case"number":if(0===n){for(r=1/n;e<t.length;){if(0===(u=t[e])&&1/u===r)return e;e+=1}return-1}if(n!==n){for(;e<t.length;){if("number"==typeof(u=t[e])&&u!==u)return e;e+=1}return-1}return t.indexOf(n,e);case"string":case"boolean":case"function":case"undefined":return t.indexOf(n,e);case"object":if(null===n)return t.indexOf(n,e)}for(;e<t.length;){if(o(t[e],n))return e;e+=1}return-1}var o=e(8);t.exports=r},function(t,n,e){var r=e(10),o=Object.prototype.toString,u=function(){return"[object Arguments]"===o.call(arguments)?function(t){return"[object Arguments]"===o.call(t)}:function(t){return r("callee",t)}};t.exports=u},function(t,n,e){var r=e(0),o=e(11),u=e(17),i=r(function(t){return!!o(t)||!!t&&("object"==typeof t&&(!u(t)&&(1===t.nodeType?!!t.length:0===t.length||t.length>0&&(t.hasOwnProperty(0)&&t.hasOwnProperty(t.length-1)))))});t.exports=i},function(t,n){function e(t){return"[object Object]"===Object.prototype.toString.call(t)}t.exports=e},function(t,n){function e(t){return"function"==typeof t["@@transducer/step"]}t.exports=e},function(t,n){function e(t,n){for(var e=0,r=n.length,o=Array(r);e<r;)o[e]=t(n[e]),e+=1;return o}t.exports=e},function(t,n){function e(t,n){return function(){return n.call(this,t.apply(this,arguments))}}t.exports=e},function(t,n){function e(t){return'"'+t.replace(/\\/g,"\\\\").replace(/[\b]/g,"\\b").replace(/\f/g,"\\f").replace(/\n/g,"\\n").replace(/\r/g,"\\r").replace(/\t/g,"\\t").replace(/\v/g,"\\v").replace(/\0/g,"\\0").replace(/"/g,'\\"')+'"'}t.exports=e},function(t,n){var e=function(t){return(t<10?"0":"")+t},r="function"==typeof Date.prototype.toISOString?function(t){return t.toISOString()}:function(t){return t.getUTCFullYear()+"-"+e(t.getUTCMonth()+1)+"-"+e(t.getUTCDate())+"T"+e(t.getUTCHours())+":"+e(t.getUTCMinutes())+":"+e(t.getUTCSeconds())+"."+(t.getUTCMilliseconds()/1e3).toFixed(3).slice(2,5)+"Z"};t.exports=r},function(t,n,e){function r(t,n){var e=function(e){var u=n.concat([t]);return o(e,u)?"<Circular>":r(e,u)},s=function(t,n){return u(function(n){return i(n)+": "+e(t[n])},n.slice().sort())};switch(Object.prototype.toString.call(t)){case"[object Arguments]":return"(function() { return arguments; }("+u(e,t).join(", ")+"))";case"[object Array]":return"["+u(e,t).concat(s(t,f(function(t){return/^\d+$/.test(t)},a(t)))).join(", ")+"]";case"[object Boolean]":return"object"==typeof t?"new Boolean("+e(t.valueOf())+")":t.toString();case"[object Date]":return"new Date("+(isNaN(t.valueOf())?e(NaN):i(c(t)))+")";case"[object Null]":return"null";case"[object Number]":return"object"==typeof t?"new Number("+e(t.valueOf())+")":1/t==-1/0?"-0":t.toString(10);case"[object String]":return"object"==typeof t?"new String("+e(t.valueOf())+")":i(t);case"[object Undefined]":return"undefined";default:if("function"==typeof t.toString){var p=t.toString();if("[object Object]"!==p)return p}return"{"+s(t,a(t)).join(", ")+"}"}}var o=e(42),u=e(55),i=e(57),c=e(58),a=e(12),f=e(66);t.exports=r},function(t,n){t.exports={init:function(){return this.xf["@@transducer/init"]()},result:function(t){return this.xf["@@transducer/result"](t)}}},function(t,n,e){var r=e(1),o=e(60),u=function(){function t(t,n){this.xf=n,this.f=t}return t.prototype["@@transducer/init"]=o.init,t.prototype["@@transducer/result"]=o.result,t.prototype["@@transducer/step"]=function(t,n){return this.f(n)?this.xf["@@transducer/step"](t,n):t},t}(),i=r(function(t,n){return new u(t,n)});t.exports=i},function(t,n){function e(t){return new r(t)}var r=function(){function t(t){this.f=t}return t.prototype["@@transducer/init"]=function(){throw new Error("init not implemented on XWrap")},t.prototype["@@transducer/result"]=function(t){return t},t.prototype["@@transducer/step"]=function(t,n){return this.f(t,n)},t}();t.exports=e},function(t,n,e){var r=e(4),o=e(0),u=o(function(t){var n,e=!1;return r(t.length,function(){return e?n:(e=!0,n=t.apply(this,arguments))})});t.exports=u},function(t,n,e){function r(){if(0===arguments.length)throw new Error("pipe requires at least one argument");return o(arguments[0].length,i(u,arguments[0],c(arguments)))}var o=e(4),u=e(56),i=e(65),c=e(69);t.exports=r},function(t,n,e){var r=e(16),o=e(18),u=r(o);t.exports=u},function(t,n,e){var r=e(41),o=e(1),u=e(36),i=o(function(t,n){return u(r(t),n)});t.exports=i},function(t,n,e){var r=e(0),o=e(17),u=r(function(t){return o(t)?t.split("").reverse().join(""):Array.prototype.slice.call(t,0).reverse()});t.exports=u},function(t,n,e){var r=e(9),o=e(16),u=o(r("slice",function(t,n,e){return Array.prototype.slice.call(e,t,n)}));t.exports=u},function(t,n,e){var r=e(9),o=e(0),u=e(68),i=o(r("tail",u(1,1/0)));t.exports=i},function(t,n,e){var r=e(0),o=r(function(t){return null===t?"Null":void 0===t?"Undefined":Object.prototype.toString.call(t).slice(8,-1)});t.exports=o},function(t,n,e){function r(t,n){for(var e=0;e<t.length;e++){var r=t[e],o=y[r.id];if(o){o.refs++;for(var u=0;u<o.parts.length;u++)o.parts[u](r.parts[u]);for(;u<r.parts.length;u++)o.parts.push(s(r.parts[u],n))}else{for(var i=[],u=0;u<r.parts.length;u++)i.push(s(r.parts[u],n));y[r.id]={id:r.id,refs:1,parts:i}}}}function o(t,n){for(var e=[],r={},o=0;o<t.length;o++){var u=t[o],i=n.base?u[0]+n.base:u[0],c=u[1],a=u[2],f=u[3],s={css:c,media:a,sourceMap:f};r[i]?r[i].parts.push(s):e.push(r[i]={id:i,parts:[s]})}return e}function u(t,n){var e=v(t.insertInto);if(!e)throw new Error("Couldn't find a style target. This probably means that the value for the 'insertInto' parameter is invalid.");var r=x[x.length-1];if("top"===t.insertAt)r?r.nextSibling?e.insertBefore(n,r.nextSibling):e.appendChild(n):e.insertBefore(n,e.firstChild),x.push(n);else{if("bottom"!==t.insertAt)throw new Error("Invalid value for parameter 'insertAt'. Must be 'top' or 'bottom'.");e.appendChild(n)}}function i(t){if(null===t.parentNode)return!1;t.parentNode.removeChild(t);var n=x.indexOf(t);n>=0&&x.splice(n,1)}function c(t){var n=document.createElement("style");return t.attrs.type="text/css",f(n,t.attrs),u(t,n),n}function a(t){var n=document.createElement("link");return t.attrs.type="text/css",t.attrs.rel="stylesheet",f(n,t.attrs),u(t,n),n}function f(t,n){Object.keys(n).forEach(function(e){t.setAttribute(e,n[e])})}function s(t,n){var e,r,o,u;if(n.transform&&t.css){if(!(u=n.transform(t.css)))return function(){};t.css=u}if(n.singleton){var f=m++;e=g||(g=c(n)),r=p.bind(null,e,f,!1),o=p.bind(null,e,f,!0)}else t.sourceMap&&"function"==typeof URL&&"function"==typeof URL.createObjectURL&&"function"==typeof URL.revokeObjectURL&&"function"==typeof Blob&&"function"==typeof btoa?(e=a(n),r=h.bind(null,e,n),o=function(){i(e),e.href&&URL.revokeObjectURL(e.href)}):(e=c(n),r=l.bind(null,e),o=function(){i(e)});return r(t),function(n){if(n){if(n.css===t.css&&n.media===t.media&&n.sourceMap===t.sourceMap)return;r(t=n)}else o()}}function p(t,n,e,r){var o=e?"":r.css;if(t.styleSheet)t.styleSheet.cssText=w(n,o);else{var u=document.createTextNode(o),i=t.childNodes;i[n]&&t.removeChild(i[n]),i.length?t.insertBefore(u,i[n]):t.appendChild(u)}}function l(t,n){var e=n.css,r=n.media;if(r&&t.setAttribute("media",r),t.styleSheet)t.styleSheet.cssText=e;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(e))}}function h(t,n,e){var r=e.css,o=e.sourceMap,u=void 0===n.convertToAbsoluteUrls&&o;(n.convertToAbsoluteUrls||u)&&(r=b(r)),o&&(r+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(o))))+" */");var i=new Blob([r],{type:"text/css"}),c=t.href;t.href=URL.createObjectURL(i),c&&URL.revokeObjectURL(c)}var y={},d=function(t){var n;return function(){return void 0===n&&(n=t.apply(this,arguments)),n}}(function(){return window&&document&&document.all&&!window.atob}),v=function(t){var n={};return function(e){return void 0===n[e]&&(n[e]=t.call(this,e)),n[e]}}(function(t){return document.querySelector(t)}),g=null,m=0,x=[],b=e(72);t.exports=function(t,n){if("undefined"!=typeof DEBUG&&DEBUG&&"object"!=typeof document)throw new Error("The style-loader cannot be used in a non-browser environment");n=n||{},n.attrs="object"==typeof n.attrs?n.attrs:{},n.singleton||(n.singleton=d()),n.insertInto||(n.insertInto="head"),n.insertAt||(n.insertAt="bottom");var e=o(t,n);return r(e,n),function(t){for(var u=[],i=0;i<e.length;i++){var c=e[i],a=y[c.id];a.refs--,u.push(a)}if(t){r(o(t,n),n)}for(var i=0;i<u.length;i++){var a=u[i];if(0===a.refs){for(var f=0;f<a.parts.length;f++)a.parts[f]();delete y[a.id]}}}};var w=function(){var t=[];return function(n,e){return t[n]=e,t.filter(Boolean).join("\n")}}()},function(t,n){t.exports=function(t){var n="undefined"!=typeof window&&window.location;if(!n)throw new Error("fixUrls requires window.location");if(!t||"string"!=typeof t)return t;var e=n.protocol+"//"+n.host,r=e+n.pathname.replace(/\/[^\/]*$/,"/");return t.replace(/url\s*\(((?:[^)(]|\((?:[^)(]+|\([^)(]*\))*\))*)\)/gi,function(t,n){var o=n.trim().replace(/^"(.*)"$/,function(t,n){return n}).replace(/^'(.*)'$/,function(t,n){return n});if(/^(#|data:|http:\/\/|https:\/\/|file:\/\/\/)/i.test(o))return t;var u;return u=0===o.indexOf("//")?o:0===o.indexOf("/")?e+o:r+o.replace(/^\.\//,""),"url("+JSON.stringify(u)+")"})}}])});
