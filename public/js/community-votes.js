!function(t){var e={};function r(n){if(e[n])return e[n].exports;var o=e[n]={i:n,l:!1,exports:{}};return t[n].call(o.exports,o,o.exports,r),o.l=!0,o.exports}r.m=t,r.c=e,r.d=function(t,e,n){r.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},r.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},r.t=function(t,e){if(1&e&&(t=r(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(r.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)r.d(n,o,function(e){return t[e]}.bind(null,o));return n},r.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(e,"a",e),e},r.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},r.p="/",r(r.s=11)}({11:function(t,e,r){t.exports=r("YV+x")},"YV+x":function(t,e){function r(t,e){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){if("undefined"==typeof Symbol||!(Symbol.iterator in Object(t)))return;var r=[],n=!0,o=!1,a=void 0;try{for(var u,i=t[Symbol.iterator]();!(n=(u=i.next()).done)&&(r.push(u.value),!e||r.length!==e);n=!0);}catch(t){o=!0,a=t}finally{try{n||null==i.return||i.return()}finally{if(o)throw a}}return r}(t,e)||function(t,e){if(!t)return;if("string"==typeof t)return n(t,e);var r=Object.prototype.toString.call(t).slice(8,-1);"Object"===r&&t.constructor&&(r=t.constructor.name);if("Map"===r||"Set"===r)return Array.from(r);if("Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return n(t,e)}(t,e)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function n(t,e){(null==e||e>t.length)&&(e=t.length);for(var r=0,n=new Array(e);r<e;r++)n[r]=t[r];return n}var o,a,u;function i(t){a.each((function(){$(this).removeClass("vote-selected")}));var e={vote:t};u=t,$.post(o.val(),e).done((function(e,n,o){t&&$(".vote-body[data-option='"+u+"']").addClass("vote-selected"),e.data&&function(t){for(var e=0,n=Object.entries(t);e<n.length;e++){var o=r(n[e],2),a=o[0],u=o[1];$(".vote-progress[data-width='"+a+"']").width(u+"%"),$(".vote-result[data-result='"+a+"']").html(u+"%")}}(e.data)})).fail((function(t,e,r){}))}$(document).ready((function(){!function(){if(0===(o=$("#community-vote-url")).length)return;$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),(a=$(".vote-body")).click((function(){var t=$(this).data("option");$(this).hasClass("vote-selected")?i():i(t)}))}()}))}});