!function(){"use strict";var e={pageType:"",products:[],properties:{arrProductId:"",id:"",variantId:"",name:"",variant:"",category:"",quantity:1,price:0,sku:"",vendor:"",type:"",keySearch:"",coupon:"",orderId:"",shipping:0,subtotal_price:0,total_price:0,cartToken:!1,event:"Action not defined",currency:HaravanAnalytics.meta.currency},options_GA:{anonymizeIp:!1,doubleClick:!0,enhancedEcommerceLoaded:!1,enhancedEcommerce:HaravanAnalytics.enhancedEcommerce||!1,enhancedLinkAttribution:!1,includeSearch:!0,nonInteraction:!1}};function t(e){for(var t=e+"=",a=document.cookie.split(";"),n=0;n<a.length;n++){for(var r=a[n];" "==r.charAt(0);)r=r.substring(1,r.length);if(0===r.indexOf(t))return r.substring(t.length,r.length)}return null}function a(e,t,a){var n=e?31536e6:252e5;!function(e,t,a){var n=new Date(a);document.cookie=e+"="+escape(t)+";path=/;expires="+n.toUTCString()}(t,a,(new Date).getTime()+n)}function n(){var e=function(){for(var e=document.getElementsByTagName("link"),t=0;t<e.length;t++){var a=e[t];if("canonical"===a.getAttribute("rel"))return a.getAttribute("href")}return""}();if(e)return e.indexOf("?")>0?e:e+window.location.search;var t=window.location.href,a=t.indexOf("#");return-1===a?t:t.slice(0,a)}HaravanAnalytics.init=function(){this.registerOnload(function(e){try{HaravanAnalytics.ga&&HaravanAnalytics.ga_eventOnload(e),HaravanAnalytics.fb&&HaravanAnalytics.fb_eventOnload(e),HaravanAnalytics.HaraStats&&HaravanAnalytics.countly_eventOnload(e)}catch(e){}}),this.registerFormSubmit(function(e){try{HaravanAnalytics.ga&&HaravanAnalytics.ga_eventFormSubmit(e),HaravanAnalytics.fb&&HaravanAnalytics.fb_eventFormSubmit(e)}catch(e){}}),document.addEventListener("DOMContentLoaded",function(e){HaravanAnalytics.registerAjax(function(e){try{HaravanAnalytics.ga&&HaravanAnalytics.ga_eventAjax(e),HaravanAnalytics.fb&&HaravanAnalytics.fb_eventAjax(e),HaravanAnalytics.HaraStats&&HaravanAnalytics.countly_eventAjax(e)}catch(e){}})})},HaravanAnalytics.registerOnload=function(n){var r=HaravanAnalytics.meta.page.pageType;if(r){if(e.pageType=r,"product"==r){var i=HaravanAnalytics.meta.product;i&&(e.properties.id=i.id,i.selected_or_first_available_variant?(e.properties.name=i.selected_or_first_available_variant.title,e.properties.variantId=i.selected_or_first_available_variant.id,e.properties.variant=i.selected_or_first_available_variant.variant_title,e.properties.price=i.selected_or_first_available_variant.price/100,e.properties.sku=i.selected_or_first_available_variant.sku):(e.properties.title=i.title,e.properties.price=i.price/100),e.properties.vendor=i.vendor,e.properties.type=i.type,e.properties.event="Viewed Product")}else if("searchresults"==r){var o=HaravanAnalytics.meta.search;o&&(e.properties.keySearch=o.query)}else if("thankyou"==r){if(!Haravan.checkout)return;var c=Haravan.checkout,p=[],s=0;$.each(c.line_items,function(t,a){var n={id:a.product_id,variantId:a.variant_id,name:a.title,variant:a.variant_title,category:"",quantity:a.quantity,price:a.price,sku:a.sku,vendor:a.vendor,type:"",currency:HaravanAnalytics.meta.currency};e.products.push(n),0==p.includes(a.product_id)&&p.push(a.product_id),s+=a.quantity}),e.properties.arrProductId=p,e.properties.coupon=c.discount.code,e.properties.orderId=c.order_number,e.properties.shipping=c.shipping_rate.price,e.properties.subtotal_price=c.subtotal_price,e.properties.total_price=c.total_price,e.properties.quantity=s,e.properties.event="Completed Order",t("tracked_start_checkout")==c.token?a(!0,"tracked_start_checkout",""):e.properties.cartToken=!0}else if("checkout"==r){var u=HaravanAnalytics.meta.cart,d=HaravanAnalytics.meta.page;if(u&&d){p=[];$.each(u.products,function(t,a){var n={id:a.productId,variantId:a.variantId,name:a.name,variant:a.variant,category:"",quantity:a.quantity,price:a.price,sku:a.sku,vendor:a.vendor,type:a.type,currency:HaravanAnalytics.meta.currency};e.products.push(n),0==p.includes(a.productId)&&p.push(a.productId)}),e.properties.arrProductId=p,e.properties.quantity=u.item_count,e.properties.total_price=u.total_price/100,e.properties.event="Viewed Checkout",t("tracked_start_checkout")!=d.resourceId||""==t("tracked_start_checkout")||null==t("tracked_start_checkout")||"undefined"==t("tracked_start_checkout")?a(!0,"tracked_start_checkout",d.resourceId):e.properties.cartToken=!0}}n(e)}},HaravanAnalytics.registerFormSubmit=function(e){var t={};function a(e,t,a){e.addEventListener?e.addEventListener(t,a):e.attachEvent&&e.attachEvent("on"+t,a)}function n(a){var n=(a=a||window.event).target||a.srcElement;n&&(n.getAttribute("action")||n.getAttribute("href"))&&e(t)}a(window,"load",function(){for(var e=0;e<document.forms.length;e++){var t=document.forms[e].getAttribute("action");t&&t.indexOf("/cart")>=0&&a(document.forms[e],"submit",n)}for(e=0;e<document.links.length;e++){var r=document.links[e].getAttribute("href");r&&r.indexOf("/checkout")>=0&&a(document.links[e],"click",n)}})},HaravanAnalytics.registerAjax=function(t){window.jQuery&&$(document).ajaxSuccess(function(a,n,r){if(null!=r&&-1!=r.url.indexOf("/cart/add")&&null!=n&&n.responseJSON){var i=n.responseJSON,o="",c=function(e){for(var t=e.split("&"),a=0;a<t.length;a++){var n=t[a].split("=");if("quantity"===n[0])return parseInt(n[1])}return 1}(r.data);$.each(i.variant_options,function(e,t){o=o+t+" / "}),e.pageType="ajaxCart";var p=e.properties;p.id=i.product_id,p.variantId=i.variant_id,p.name=i.title+" - "+o.slice(0,-3),p.variant=o.slice(0,-3),p.category="",p.quantity=c,p.price=i.price/100,p.sku=i.sku,p.vendor=i.vendor,p.type="",p.event="Added Product",t(e),e.options_GA.enhancedEcommerce&&HaravanAnalytics.enhancedEcommerce(e)}})},HaravanAnalytics.ga_eventOnload=function(e){var t,a;e&&e.options_GA.enhancedEcommerce&&(e.options_GA.doubleClick&&window.ga("require","displayfeatures"),HaravanAnalytics.ga_pageView(e,(t=window.location.href,a=t.indexOf("?"),t=-1===a?"":t.slice(a),a=t.indexOf("#"),t="?"===(t=-1===a?t:t.slice(0,a))?"":t,{path:window.location.pathname,referrer:document.referrer,search:t,title:document.title,url:n(),properties:{}})),e.options_GA.enhancedLinkAttribution&&window.ga("require","linkid"),e.options_GA.anonymizeIp&&window.ga("set","anonymizeIp",e.options_GA.anonymizeIp),e.options_GA.enhancedEcommerce&&HaravanAnalytics.enhancedEcommerce(e))},HaravanAnalytics.ga_eventFormSubmit=function(e){e&&ga(function(e){var t=e.get("linkerParam");document.cookie="_haravan_ga="+t+"; path=/"})},HaravanAnalytics.ga_eventAjax=function(e){},HaravanAnalytics.ga_pageView=function(e,t){var a=t.path,n=e.options_GA.includeSearch&&t.search&&(a+=t.search)||a,r=t.title,i={page:n,title:r};window.ga("set",i);var o={page:n,title:r,location:t.url};window.ga("send","pageview",o)},HaravanAnalytics.enhancedEcommerce=function(e){function t(e){var t=e.options_GA;t.enhancedEcommerceLoaded||(window.ga("require","ec"),t.enhancedEcommerceLoaded=!0),window.ga("set","&cu",e.properties.currency)}function a(e){var t=e.properties,a={eventAction:t.event,eventCategory:t.category||"All",eventLabel:t.label,eventValue:t.total_price.toString(),nonInteraction:!0};window.ga("send","event",a)}function n(e){var t={id:e.sku||e.variantId.toString()||e.id.toString(),name:e.name,category:"",quantity:e.quantity,price:e.price.toString(),vendor:e.vendor,variant:e.variant,currency:e.currency};e.coupon&&(t.coupon=e.coupon),window.ga("ec:addProduct",t)}function r(e){var t=e.properties;window.ga("send","event",{eventCategory:t.category||"EnhancedEcommerce",eventAction:t.event,eventLabel:t.label,nonInteraction:!0})}function i(e,t){n(e),window.ga("ec:setAction",t)}"product"==e.pageType?function(e){var a=e.properties;t(e),i(a,"detail"),r(e)}(e):"ajaxCart"==e.pageType?function(e){var a=e.properties;t(e),i(a,"add"),r(e)}(e):"checkout"==e.pageType?e.properties.cartToken?a(e):function(e){var a=e.products;t(e);for(var i=0;i<e.products.length;i++)n(a[i]);window.ga("ec:setAction","checkout",{step:1}),r(e)}(e):"thankyou"==e.pageType&&(e.properties.cartToken?a(e):function(e){var a=e.properties,i=a.total_price.toString()||a.subtotal_price.toString()||"",o=a.orderId.toString(),c=e.products||[];if(o){t(e);for(var p=0;p<c.length;p++)n(c[p]);window.ga("ec:setAction","purchase",{id:o,affiliation:void 0,revenue:i,tax:"",shipping:a.shipping.toString(),coupon:a.coupon}),r(e)}}(e))},HaravanAnalytics.fb_eventOnload=function(e){e&&("product"==e.pageType?fbq("track","ViewContent",{content_ids:[e.properties.id],content_name:e.properties.name,content_type:"product_group",value:e.properties.price,currency:e.properties.currency}):"searchresults"==e.pageType?fbq("track","Search",{search_string:e.properties.keySearch}):"thankyou"==e.pageType?(fbq("track","AddPaymentInfo",{value:e.properties.total_price,currency:e.properties.currency}),fbq("track","Purchase",{content_ids:e.properties.arrProductId,content_type:"product_group",value:e.properties.subtotal_price,num_items:e.properties.quantity,currency:e.properties.currency})):"checkout"!=e.pageType||e.properties.cartToken||fbq("track","InitiateCheckout",{content_ids:e.properties.arrProductId,content_type:"product_group",value:e.properties.total_price,num_items:e.properties.quantity,currency:e.properties.currency}))},HaravanAnalytics.fb_eventFormSubmit=function(e){},HaravanAnalytics.fb_eventAjax=function(e){e&&fbq("track","AddToCart",{content_ids:[e.properties.id],content_name:e.properties.name,content_type:"product_group",value:e.properties.price,num_items:e.properties.quantity,currency:e.properties.currency})},HaravanAnalytics.countly_eventOnload=function(e){e&&HaravanAnalytics.countly_enhancedEcommerce(e)},HaravanAnalytics.countly_eventAjax=function(e){if(e){var t=e.properties,a={id:t.sku||t.variantId.toString()||t.id.toString(),name:t.name,category:"",quantity:t.quantity,price:t.price.toString(),vendor:t.vendor,variant:t.variant,currency:t.currency};HaraStats.q.push(["add_event",{key:"add",segmentation:a}])}},HaravanAnalytics.countly_enhancedEcommerce=function(e){var t=e.properties,a={id:t.sku||t.variantId.toString()||t.id.toString(),name:t.name,category:"",quantity:t.quantity,price:t.price.toString(),vendor:t.vendor,variant:t.variant,currency:t.currency};if("product"==e.pageType)HaraStats.q.push(["add_event",{key:"detail",segmentation:a}]);else if("checkout"==e.pageType)e.properties.cartToken?HaraStats.q.push(["add_event",{key:"checkout",segmentation:{eventAction:t.event,eventCategory:t.category||"All",eventLabel:t.label,eventValue:t.total_price.toString(),nonInteraction:!0}}]):HaraStats.q.push(["add_event",{key:"checkout",segmentation:{eventAction:t.event,eventCategory:t.category||"EnhancedEcommerce",eventLabel:"Viewed Checkout - Contact information Page",nonInteraction:!0}}]);else if("thankyou"==e.pageType)if(e.properties.cartToken)HaraStats.q.push(["add_event",{key:"purchase",segmentation:{eventAction:t.event,eventCategory:t.category||"All",eventLabel:"Viewed Orders - Thank You Page",eventValue:t.total_price.toString(),nonInteraction:!0}}]);else{var n=t.total_price.toString()||t.subtotal_price.toString()||"",r=t.orderId.toString();HaraStats.q.push(["add_event",{key:"purchase",segmentation:{id:r,affiliation:void 0,revenue:n,tax:"",shipping:t.shipping.toString(),coupon:t.coupon}}])}};try{HaravanAnalytics.init()}catch(e){}}();