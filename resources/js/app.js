import './bootstrap';
import Alpine from 'alpinejs';
import('preline');
import { Datepicker, Input, initTE, Tab, Modal } from "tw-elements";
import Swiper from 'swiper/bundle';
initTE({ Datepicker, Input, Tab, Modal });
window.Alpine = Alpine;
Alpine.start();
