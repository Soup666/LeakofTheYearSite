"use strict";
(self["webpackChunkLeakofTheYear"] = self["webpackChunkLeakofTheYear"] || []).push([["assets_app_ts"],{

/***/ "./assets/app.ts":
/*!***********************!*\
  !*** ./assets/app.ts ***!
  \***********************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
})); // Entry point

__webpack_require__(/*! ./js/main */ "./assets/js/main.ts");

__webpack_require__(/*! ./scss/main.scss */ "./assets/scss/main.scss");

/***/ }),

/***/ "./assets/js/dashkit/autosize.ts":
/*!***************************************!*\
  !*** ./assets/js/dashkit/autosize.ts ***!
  \***************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

 //
// autosize.js
// Dashkit module
//

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var autosize_1 = __webpack_require__(/*! autosize */ "./node_modules/autosize/dist/autosize.esm.js");

var toggles = document.querySelectorAll('[data-autosize]');
toggles.forEach(function (toggle) {
  (0, autosize_1["default"])(toggle);
});
window.autosize = autosize_1["default"];

/***/ }),

/***/ "./assets/js/dashkit/bootstrap.ts":
/*!****************************************!*\
  !*** ./assets/js/dashkit/bootstrap.ts ***!
  \****************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var bootstrap_1 = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");

window.Alert = bootstrap_1.Alert;
window.Button = bootstrap_1.Button;
window.Carousel = bootstrap_1.Carousel;
window.Collapse = bootstrap_1.Collapse;
window.Dropdown = bootstrap_1.Dropdown;
window.Modal = bootstrap_1.Modal;
window.Offcanvas = bootstrap_1.Offcanvas;
window.Popover = bootstrap_1.Popover;
window.ScrollSpy = bootstrap_1.ScrollSpy;
window.Tab = bootstrap_1.Tab;
window.Toast = bootstrap_1.Toast;
window.Tooltip = bootstrap_1.Tooltip;

/***/ }),

/***/ "./assets/js/dashkit/checklist.ts":
/*!****************************************!*\
  !*** ./assets/js/dashkit/checklist.ts ***!
  \****************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

 //
// checklist.js
// Dashkit module
//

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var draggable_1 = __webpack_require__(/*! @shopify/draggable */ "./node_modules/@shopify/draggable/lib/draggable.bundle.js");

var checklists = document.querySelectorAll('.checklist');

if (checklists) {
  new draggable_1.Sortable(checklists, {
    draggable: '.form-check',
    handle: '.form-check-label',
    mirror: {
      constrainDimensions: true
    }
  });
}

/***/ }),

/***/ "./assets/js/dashkit/choices.ts":
/*!**************************************!*\
  !*** ./assets/js/dashkit/choices.ts ***!
  \**************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/es.regexp.exec.js */ "./node_modules/core-js/modules/es.regexp.exec.js");

__webpack_require__(/*! core-js/modules/es.string.replace.js */ "./node_modules/core-js/modules/es.string.replace.js");

__webpack_require__(/*! core-js/modules/es.array.concat.js */ "./node_modules/core-js/modules/es.array.concat.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");

__webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");

__webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");

__webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptor.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptor.js");

__webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptors.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptors.js");

__webpack_require__(/*! core-js/modules/es.object.define-properties.js */ "./node_modules/core-js/modules/es.object.define-properties.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));
exports.initChoices = void 0;

var Choices = __webpack_require__(/*! choices.js */ "./node_modules/choices.js/public/assets/scripts/choices.js");

var toggles = document.querySelectorAll('[data-choices]');

var decodeHtmlSpecialChars = function decodeHtmlSpecialChars(str) {
  str = str.replace(/&#(\d+);/g, function (match, dec) {
    return String.fromCharCode(dec);
  });
  str = str.replace(/&quot;/g, '"').replace(/&amp;/g, '&').replace(/&lt;/g, '<').replace(/&gt;/g, '>').replace(/&apos;/g, "'");
  return str;
}; // @ts-ignore


function initChoices(toggleElement) {
  var optionOverrides = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
  var defaultOptions = {
    allowHTML: false,
    classNames: {
      containerInner: toggleElement.className,
      input: 'form-control',
      inputCloned: 'form-control-sm',
      listDropdown: 'dropdown-menu',
      itemChoice: 'dropdown-item',
      activeState: 'show',
      selectedState: 'active'
    },
    shouldSort: false,
    callbackOnCreateTemplates: function callbackOnCreateTemplates(template) {
      var _this = this;

      return {
        choice: function choice(options, data) {
          var classNames = options.classNames;
          var classes = "".concat(classNames.item, " ").concat(classNames.itemChoice, " ").concat(data.disabled ? classNames.itemDisabled : classNames.itemSelectable);
          var disabled = data.disabled ? 'data-choice-disabled aria-disabled="true"' : 'data-choice-selectable';
          var role = data.groupId > 0 ? 'role="treeitem"' : 'role="option"';
          var selectText = _this.config.itemSelectText;
          var label = '';

          if (data.customProperties && data.customProperties.avatarSrc) {
            label = "<div class=\"avatar avatar-xs me-3\">" + "    <img class=\"avatar-img rounded-circle\" src=\"".concat(data.customProperties.avatarSrc, "\" alt=\"").concat(data.label, "\" >") + "</div> ";
          }

          label += data.label;
          return template("<div class=\"".concat(classes, "\" data-select-text=\"").concat(selectText, "\" data-choice ").concat(disabled, " data-id=\"").concat(data.id, "\" data-value=\"").concat(data.value, "\" ").concat(role, ">").concat(label, "</div>"));
        }
      };
    }
  };

  if (toggleElement.multiple) {
    defaultOptions['removeItemButton'] = true;
  }

  var options = _objectSpread(_objectSpread({}, optionOverrides), defaultOptions); // @ts-ignore


  return toggleElement.choices = new Choices(toggleElement, options);
}

exports.initChoices = initChoices;
toggles.forEach(function (toggle) {
  // Decode from PHP's htmlspecialchars
  var dataChoices = toggle.getAttribute("data-choices");

  if (dataChoices) {
    dataChoices = decodeHtmlSpecialChars(dataChoices);
  }

  var elementOptions = dataChoices ? JSON.parse(dataChoices) : {};
  initChoices(toggle, elementOptions);
}); // Make available globally

window.Choices = Choices;

/***/ }),

/***/ "./assets/js/dashkit/dropzone.ts":
/*!***************************************!*\
  !*** ./assets/js/dashkit/dropzone.ts ***!
  \***************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

 //
// dropzone.js
// Theme module
//

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");

__webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");

__webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");

__webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptor.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptor.js");

__webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptors.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptors.js");

__webpack_require__(/*! core-js/modules/es.object.define-properties.js */ "./node_modules/core-js/modules/es.object.define-properties.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var dropzone_1 = __webpack_require__(/*! dropzone */ "./node_modules/dropzone/dist/dropzone.mjs");

dropzone_1["default"].autoDiscover = false;
dropzone_1["default"].thumbnailWidth = null;
dropzone_1["default"].thumbnailHeight = null;
var toggles = document.querySelectorAll('[data-dropzone]');
toggles.forEach(function (toggle) {
  var currentFile = undefined;
  var elementOptions = toggle.getAttribute("data-dropzone") ? JSON.parse(toggle.getAttribute("data-dropzone")) : {};
  var defaultOptions = {
    previewsContainer: toggle.querySelector('.dz-preview'),
    previewTemplate: toggle.querySelector('.dz-preview').innerHTML,
    init: function init() {
      this.on('addedfile', function (file) {
        var maxFiles = elementOptions.maxFiles;

        if (maxFiles == 1 && currentFile) {
          this.removeFile(currentFile);
        }

        currentFile = file;
      });
    }
  };

  var options = _objectSpread(_objectSpread({}, elementOptions), defaultOptions); // Clear preview


  toggle.querySelector('.dz-preview').innerHTML = ''; // Init dropzone

  new dropzone_1["default"](toggle, options);
});
window.Dropzone = dropzone_1["default"];

/***/ }),

/***/ "./assets/js/dashkit/flatpickr.ts":
/*!****************************************!*\
  !*** ./assets/js/dashkit/flatpickr.ts ***!
  \****************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

 //
// flatpickr.js
// Theme module
//

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var flatpickr_1 = __webpack_require__(/*! flatpickr */ "./node_modules/flatpickr/dist/esm/index.js");

var toggles = document.querySelectorAll('[data-flatpickr]');
toggles.forEach(function (toggle) {
  var options = toggle.getAttribute("data-flatpickr") ? JSON.parse(toggle.getAttribute("data-flatpickr")) : {};
  (0, flatpickr_1["default"])(toggle, options);
});
window.flatpickr = flatpickr_1["default"];

/***/ }),

/***/ "./assets/js/dashkit/inputmask.ts":
/*!****************************************!*\
  !*** ./assets/js/dashkit/inputmask.ts ***!
  \****************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

 //
// inputmask.js
// Theme module
//

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var inputmask_1 = __webpack_require__(/*! inputmask */ "./node_modules/inputmask/dist/inputmask.js");

var toggles = document.querySelectorAll('[data-inputmask]');
var options = {
  rightAlign: false
};
(0, inputmask_1["default"])(options).mask(toggles);
window.InputMask = inputmask_1["default"];

/***/ }),

/***/ "./assets/js/dashkit/kanban.ts":
/*!*************************************!*\
  !*** ./assets/js/dashkit/kanban.ts ***!
  \*************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

 //
// kanban.js
// Dashkit module
//

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var draggable_1 = __webpack_require__(/*! @shopify/draggable */ "./node_modules/@shopify/draggable/lib/draggable.bundle.js");

var categories = document.querySelectorAll('.kanban-category');
var links = document.querySelectorAll('.kanban-add-link');
var forms = document.querySelectorAll('.kanban-add-form');

function toggleItems(el) {
  var parent = el.closest('.kanban-add');
  var card = parent.querySelector('.card');
  var link = parent.querySelector('.kanban-add-link');
  var form = parent.querySelector('.kanban-add-form');
  link.classList.toggle('d-none');
  form.classList.toggle('d-none');

  if (card && card.classList.contains('card-sm')) {
    if (card.classList.contains('card-flush')) {
      card.classList.remove('card-flush');
    } else {
      card.classList.add('card-flush');
    }
  }
}

if (categories) {
  new draggable_1.Sortable(categories, {
    draggable: '.kanban-item',
    mirror: {
      constrainDimensions: true
    }
  });
}

links.forEach(function (link) {
  link.addEventListener('click', function () {
    toggleItems(link);
  });
});
forms.forEach(function (form) {
  form.addEventListener('reset', function () {
    toggleItems(form);
  });
  form.addEventListener('submit', function (e) {
    e.preventDefault();
  });
});
window.Sortable = draggable_1.Sortable;

/***/ }),

/***/ "./assets/js/dashkit/list.ts":
/*!***********************************!*\
  !*** ./assets/js/dashkit/list.ts ***!
  \***********************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

 //
// list.js
// Theme module
//

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/es.object.assign.js */ "./node_modules/core-js/modules/es.object.assign.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/es.parse-int.js */ "./node_modules/core-js/modules/es.parse-int.js");

__webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");

__webpack_require__(/*! core-js/modules/es.array.slice.js */ "./node_modules/core-js/modules/es.array.slice.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var list_js_1 = __webpack_require__(/*! list.js */ "./node_modules/list.js/src/index.js");

exports["default"] = function () {
  var lists = document.querySelectorAll('[data-list]');
  var sorts = document.querySelectorAll('[data-sort]');

  function init(list) {
    var listAlert = list.querySelector('.list-alert');
    var listAlertCount = list.querySelector('.list-alert-count');
    var listAlertClose = list.querySelector('.list-alert .btn-close');
    var listCheckboxes = list.querySelectorAll('.list-checkbox');
    var listCheckboxAll = list.querySelector('.list-checkbox-all');
    var listPagination = list.querySelectorAll('.list-pagination');
    var listPaginationPrev = list.querySelector('.list-pagination-prev');
    var listPaginationNext = list.querySelector('.list-pagination-next');
    var listOptions = list.dataset.list && JSON.parse(list.dataset.list);
    var defaultOptions = {
      listClass: 'list',
      searchClass: 'list-search',
      sortClass: 'list-sort'
    }; // Merge options

    var options = Object.assign(defaultOptions, listOptions); // Init

    var listObj = new list_js_1["default"](list, options); // Pagination

    if (listPagination) {
      [].forEach.call(listPagination, function (pagination) {
        pagination.addEventListener('click', function (e) {
          e.preventDefault();
        });
      });
    } // Pagination (next)


    if (listPaginationNext) {
      listPaginationNext.addEventListener('click', function (e) {
        e.preventDefault();
        var nextItem = parseInt(listObj.i) + parseInt(listObj.page);

        if (nextItem <= listObj.size()) {
          listObj.show(nextItem, listObj.page);
        }
      });
    } // Pagination (prev)


    if (listPaginationPrev) {
      listPaginationPrev.addEventListener('click', function (e) {
        e.preventDefault();
        var prevItem = parseInt(listObj.i) - parseInt(listObj.page);

        if (prevItem > 0) {
          listObj.show(prevItem, listObj.page);
        }
      });
    } // Checkboxes


    if (listCheckboxes) {
      [].forEach.call(listCheckboxes, function (checkbox) {
        checkbox.addEventListener('change', function () {
          countCheckboxes(listCheckboxes, listAlert, listAlertCount);

          if (listCheckboxAll) {
            listCheckboxAll.checked = false;
          }
        });
      });
    } // Checkbox


    if (listCheckboxAll) {
      listCheckboxAll.addEventListener('change', function () {
        [].forEach.call(listCheckboxes, function (checkbox) {
          checkbox.checked = listCheckboxAll.checked;
        });
        countCheckboxes(listCheckboxes, listAlert, listAlertCount);
      });
    } // Alert


    if (listAlertClose) {
      listAlertClose.addEventListener('click', function (e) {
        e.preventDefault();

        if (listCheckboxAll) {
          listCheckboxAll.checked = false;
        }

        [].forEach.call(listCheckboxes, function (checkbox) {
          checkbox.checked = false;
        });
        countCheckboxes(listCheckboxes, listAlert, listAlertCount);
      });
    }
  }

  function countCheckboxes(listCheckboxes, listAlert, listAlertCount) {
    var checked = [].slice.call(listCheckboxes).filter(function (checkbox) {
      return checkbox.checked;
    });

    if (listAlert) {
      checked.length ? listAlert.classList.add('show') : listAlert.classList.remove('show');
      listAlertCount.innerHTML = checked.length;
    }
  }

  if (typeof list_js_1["default"] !== 'undefined' && lists) {
    [].forEach.call(lists, function (list) {
      init(list);
    });
  }

  if (typeof list_js_1["default"] !== 'undefined' && sorts) {
    [].forEach.call(sorts, function (sort) {
      sort.addEventListener('click', function (e) {
        e.preventDefault();
      });
    });
  }
}();

window.List = list_js_1["default"];

/***/ }),

/***/ "./assets/js/dashkit/map.ts":
/*!**********************************!*\
  !*** ./assets/js/dashkit/map.ts ***!
  \**********************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

 //
// map.js
// Theme module
//

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");

__webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");

__webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");

__webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptor.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptor.js");

__webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptors.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptors.js");

__webpack_require__(/*! core-js/modules/es.object.define-properties.js */ "./node_modules/core-js/modules/es.object.define-properties.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var mapbox_gl_1 = __webpack_require__(/*! mapbox-gl */ "./node_modules/mapbox-gl/dist/mapbox-gl.js");

var maps = document.querySelectorAll('[data-map]');
var accessToken = 'pk.eyJ1IjoiZ29vZHRoZW1lcyIsImEiOiJjanU5eHR4N2cybDU5NGVwOHZwNGprb3E0In0.msdw9q16dh8v4azJXUdiXg';

if (typeof mapbox_gl_1.mapboxgl !== 'undefined') {
  maps.forEach(function (map) {
    var elementOptions = map.getAttribute("data-map") ? JSON.parse(map.getAttribute("data-map")) : {};
    var defaultOptions = {
      container: map,
      style: 'mapbox://styles/mapbox/light-v9',
      scrollZoom: false,
      interactive: false
    };

    var options = _objectSpread(_objectSpread({}, elementOptions), defaultOptions); // Get access token


    mapbox_gl_1.mapboxgl.accessToken = accessToken; // Init map

    new mapbox_gl_1.mapboxgl.Map(options);
  });
}

/***/ }),

/***/ "./assets/js/dashkit/navbar-collapse.ts":
/*!**********************************************!*\
  !*** ./assets/js/dashkit/navbar-collapse.ts ***!
  \**********************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

 //
// navbar.js
// Theme module
//

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var bootstrap_1 = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");

var collapses = document.querySelectorAll('.navbar-nav .collapse');
collapses.forEach(function (collapse) {
  // Init collapses
  var collapseInstance = new bootstrap_1.Collapse(collapse, {
    toggle: false
  }); // Hide sibling collapses on `show.bs.collapse`

  collapse.addEventListener('show.bs.collapse', function (e) {
    e.stopPropagation();
    var closestCollapse = collapse.parentElement.closest('.collapse');
    var siblingCollapses = closestCollapse.querySelectorAll('.collapse');
    siblingCollapses.forEach(function (siblingCollapse) {
      var siblingCollapseInstance = bootstrap_1.Collapse.getInstance(siblingCollapse);

      if (siblingCollapseInstance === collapseInstance) {
        return;
      }

      siblingCollapseInstance.hide();
    });
  }); // Hide nested collapses on `hide.bs.collapse`

  collapse.addEventListener('hide.bs.collapse', function (e) {
    e.stopPropagation();
    var childCollapses = collapse.querySelectorAll('.collapse');
    childCollapses.forEach(function (childCollapse) {
      var childCollapseInstance = bootstrap_1.Collapse.getInstance(childCollapse);
      childCollapseInstance.hide();
    });
  });
});

/***/ }),

/***/ "./assets/js/dashkit/navbar-dropdown.ts":
/*!**********************************************!*\
  !*** ./assets/js/dashkit/navbar-dropdown.ts ***!
  \**********************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

 //
// navbar-dropdown.js
//

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var bootstrap_1 = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");

var selectors = '.navbar .dropup, .navbar .dropend, .navbar .dropdown, .navbar .dropstart';
var dropdowns = document.querySelectorAll(selectors);
var NAVBAR_BREAKPOINT = 767;

if (window.innerWidth > NAVBAR_BREAKPOINT) {
  dropdowns.forEach(function (dropdown) {
    var toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
    var instance = new bootstrap_1.Dropdown(toggle);
    dropdown.addEventListener('mouseenter', function () {
      instance.show();
    });
    dropdown.addEventListener('mouseleave', function () {
      instance.hide();
    });
  });
}

/***/ }),

/***/ "./assets/js/dashkit/popover.ts":
/*!**************************************!*\
  !*** ./assets/js/dashkit/popover.ts ***!
  \**************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

 //
// popover.js
// Theme module
//

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var bootstrap_1 = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");

var popovers = document.querySelectorAll('[data-bs-toggle="popover"]');
popovers.forEach(function (popover) {
  new bootstrap_1.Popover(popover);
});

/***/ }),

/***/ "./assets/js/dashkit/quill.ts":
/*!************************************!*\
  !*** ./assets/js/dashkit/quill.ts ***!
  \************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

 //
// quill.js
// Theme module
//

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); enumerableOnly && (symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; })), keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = null != arguments[i] ? arguments[i] : {}; i % 2 ? ownKeys(Object(source), !0).forEach(function (key) { _defineProperty(target, key, source[key]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)) : ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.keys.js */ "./node_modules/core-js/modules/es.object.keys.js");

__webpack_require__(/*! core-js/modules/es.symbol.js */ "./node_modules/core-js/modules/es.symbol.js");

__webpack_require__(/*! core-js/modules/es.array.filter.js */ "./node_modules/core-js/modules/es.array.filter.js");

__webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptor.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptor.js");

__webpack_require__(/*! core-js/modules/es.object.get-own-property-descriptors.js */ "./node_modules/core-js/modules/es.object.get-own-property-descriptors.js");

__webpack_require__(/*! core-js/modules/es.object.define-properties.js */ "./node_modules/core-js/modules/es.object.define-properties.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var quill_1 = __webpack_require__(/*! quill */ "./node_modules/quill/dist/quill.js");

var toggles = document.querySelectorAll('[data-quill]');
toggles.forEach(function (toggle) {
  var elementOptions = toggle.getAttribute("data-quill") ? JSON.parse(toggle.getAttribute("data-quill")) : {};
  var defaultOptions = {
    modules: {
      toolbar: [['bold', 'italic'], ['link', 'blockquote', 'code', 'image'], [{
        list: 'ordered'
      }, {
        list: 'bullet'
      }]]
    },
    theme: 'snow'
  };

  var options = _objectSpread(_objectSpread({}, elementOptions), defaultOptions);

  new quill_1["default"](toggle, options);
});
window.Quill = quill_1["default"];

/***/ }),

/***/ "./assets/js/dashkit/theme.ts":
/*!************************************!*\
  !*** ./assets/js/dashkit/theme.ts ***!
  \************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {



__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
})); // Vendor

__webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js"); // Theme - Globally accessible


__webpack_require__(/*! ./bootstrap */ "./assets/js/dashkit/bootstrap.ts");

__webpack_require__(/*! ./autosize */ "./assets/js/dashkit/autosize.ts");

__webpack_require__(/*! ./choices */ "./assets/js/dashkit/choices.ts");

__webpack_require__(/*! ./dropzone */ "./assets/js/dashkit/dropzone.ts");

__webpack_require__(/*! ./flatpickr */ "./assets/js/dashkit/flatpickr.ts");

__webpack_require__(/*! ./inputmask */ "./assets/js/dashkit/inputmask.ts");

__webpack_require__(/*! ./kanban */ "./assets/js/dashkit/kanban.ts");

__webpack_require__(/*! ./list */ "./assets/js/dashkit/list.ts");

__webpack_require__(/*! ./quill */ "./assets/js/dashkit/quill.ts"); // Theme - Other


__webpack_require__(/*! ./checklist */ "./assets/js/dashkit/checklist.ts");

__webpack_require__(/*! ./map */ "./assets/js/dashkit/map.ts");

__webpack_require__(/*! ./navbar-collapse */ "./assets/js/dashkit/navbar-collapse.ts");

__webpack_require__(/*! ./navbar-dropdown */ "./assets/js/dashkit/navbar-dropdown.ts");

__webpack_require__(/*! ./popover */ "./assets/js/dashkit/popover.ts");

__webpack_require__(/*! ./tooltip */ "./assets/js/dashkit/tooltip.ts");

__webpack_require__(/*! ./wizard */ "./assets/js/dashkit/wizard.ts");

/***/ }),

/***/ "./assets/js/dashkit/tooltip.ts":
/*!**************************************!*\
  !*** ./assets/js/dashkit/tooltip.ts ***!
  \**************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

 //
// popover.js
// Theme module
//

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var bootstrap_1 = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");

var tooltips = document.querySelectorAll('[data-bs-toggle="tooltip"]');
tooltips.forEach(function (tooltip) {
  new bootstrap_1.Tooltip(tooltip);
});

/***/ }),

/***/ "./assets/js/dashkit/wizard.ts":
/*!*************************************!*\
  !*** ./assets/js/dashkit/wizard.ts ***!
  \*************************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {

 //
// wizard.js
// Dashkit module
//

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

__webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");

__webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");

__webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

var bootstrap_1 = __webpack_require__(/*! bootstrap */ "./node_modules/bootstrap/dist/js/bootstrap.esm.js");

var toggles = document.querySelectorAll('[data-toggle="wizard"]');
toggles.forEach(function (toggle) {
  toggle.addEventListener('click', function (e) {
    e.preventDefault(); // Toggle new tab

    var tab = new bootstrap_1.Tab(toggle);
    tab.show(); // Remove active state

    toggle.classList.remove('active');
  });
});

/***/ }),

/***/ "./assets/js/main.ts":
/*!***************************!*\
  !*** ./assets/js/main.ts ***!
  \***************************/
/***/ ((__unused_webpack_module, exports, __webpack_require__) => {


/**
 * Write your own JavaScript in this file
 */

__webpack_require__(/*! core-js/modules/es.object.define-property.js */ "./node_modules/core-js/modules/es.object.define-property.js");

Object.defineProperty(exports, "__esModule", ({
  value: true
}));

__webpack_require__(/*! ./dashkit/theme */ "./assets/js/dashkit/theme.ts");

/***/ }),

/***/ "./assets/scss/main.scss":
/*!*******************************!*\
  !*** ./assets/scss/main.scss ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

}]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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c3NldHMvYXBwLnRzIiwid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvZGFzaGtpdC9hdXRvc2l6ZS50cyIsIndlYnBhY2s6Ly9MZWFrb2ZUaGVZZWFyLy4vYXNzZXRzL2pzL2Rhc2hraXQvYm9vdHN0cmFwLnRzIiwid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvZGFzaGtpdC9jaGVja2xpc3QudHMiLCJ3ZWJwYWNrOi8vTGVha29mVGhlWWVhci8uL2Fzc2V0cy9qcy9kYXNoa2l0L2Nob2ljZXMudHMiLCJ3ZWJwYWNrOi8vTGVha29mVGhlWWVhci8uL2Fzc2V0cy9qcy9kYXNoa2l0L2Ryb3B6b25lLnRzIiwid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvZGFzaGtpdC9mbGF0cGlja3IudHMiLCJ3ZWJwYWNrOi8vTGVha29mVGhlWWVhci8uL2Fzc2V0cy9qcy9kYXNoa2l0L2lucHV0bWFzay50cyIsIndlYnBhY2s6Ly9MZWFrb2ZUaGVZZWFyLy4vYXNzZXRzL2pzL2Rhc2hraXQva2FuYmFuLnRzIiwid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvZGFzaGtpdC9saXN0LnRzIiwid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvZGFzaGtpdC9tYXAudHMiLCJ3ZWJwYWNrOi8vTGVha29mVGhlWWVhci8uL2Fzc2V0cy9qcy9kYXNoa2l0L25hdmJhci1jb2xsYXBzZS50cyIsIndlYnBhY2s6Ly9MZWFrb2ZUaGVZZWFyLy4vYXNzZXRzL2pzL2Rhc2hraXQvbmF2YmFyLWRyb3Bkb3duLnRzIiwid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvZGFzaGtpdC9wb3BvdmVyLnRzIiwid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvZGFzaGtpdC9xdWlsbC50cyIsIndlYnBhY2s6Ly9MZWFrb2ZUaGVZZWFyLy4vYXNzZXRzL2pzL2Rhc2hraXQvdGhlbWUudHMiLCJ3ZWJwYWNrOi8vTGVha29mVGhlWWVhci8uL2Fzc2V0cy9qcy9kYXNoa2l0L3Rvb2x0aXAudHMiLCJ3ZWJwYWNrOi8vTGVha29mVGhlWWVhci8uL2Fzc2V0cy9qcy9kYXNoa2l0L3dpemFyZC50cyIsIndlYnBhY2s6Ly9MZWFrb2ZUaGVZZWFyLy4vYXNzZXRzL2pzL21haW4udHMiLCJ3ZWJwYWNrOi8vTGVha29mVGhlWWVhci8uL2Fzc2V0cy9zY3NzL21haW4uc2NzcyJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyBFbnRyeSBwb2ludFxuaW1wb3J0ICcuL2pzL21haW4nO1xuaW1wb3J0ICcuL3Njc3MvbWFpbi5zY3NzJzsiLCIvL1xuLy8gYXV0b3NpemUuanNcbi8vIERhc2hraXQgbW9kdWxlXG4vL1xuXG5pbXBvcnQgYXV0b3NpemUgZnJvbSAnYXV0b3NpemUnO1xuXG5jb25zdCB0b2dnbGVzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnW2RhdGEtYXV0b3NpemVdJyk7XG5cbnRvZ2dsZXMuZm9yRWFjaCgodG9nZ2xlKSA9PiB7XG4gICAgYXV0b3NpemUodG9nZ2xlKTtcbn0pO1xuXG4vLyBNYWtlIGF2YWlsYWJsZSBnbG9iYWxseVxuZGVjbGFyZSBnbG9iYWwge1xuICAgIGludGVyZmFjZSBXaW5kb3cge1xuICAgICAgICBhdXRvc2l6ZTogYW55O1xuICAgIH1cbn1cblxud2luZG93LmF1dG9zaXplID0gYXV0b3NpemU7XG4iLCJpbXBvcnQge1xuICAgIEFsZXJ0LFxuICAgIEJ1dHRvbixcbiAgICBDYXJvdXNlbCxcbiAgICBDb2xsYXBzZSxcbiAgICBEcm9wZG93bixcbiAgICBNb2RhbCxcbiAgICBPZmZjYW52YXMsXG4gICAgUG9wb3ZlcixcbiAgICBTY3JvbGxTcHksXG4gICAgVGFiLFxuICAgIFRvYXN0LFxuICAgIFRvb2x0aXAsXG59IGZyb20gJ2Jvb3RzdHJhcCc7XG5cbi8vIE1ha2UgYXZhaWxhYmxlIGdsb2JhbGx5XG5kZWNsYXJlIGdsb2JhbCB7XG4gICAgaW50ZXJmYWNlIFdpbmRvdyB7XG4gICAgICAgIEFsZXJ0OiBBbGVydFxuICAgICAgICBCdXR0b246IEJ1dHRvblxuICAgICAgICBDYXJvdXNlbDogQ2Fyb3VzZWxcbiAgICAgICAgQ29sbGFwc2U6IENvbGxhcHNlXG4gICAgICAgIERyb3Bkb3duOiBEcm9wZG93blxuICAgICAgICBNb2RhbDogTW9kYWxcbiAgICAgICAgT2ZmY2FudmFzOiBPZmZjYW52YXNcbiAgICAgICAgUG9wb3ZlcjogUG9wb3ZlclxuICAgICAgICBTY3JvbGxTcHk6IFNjcm9sbFNweVxuICAgICAgICBUYWI6IFRhYlxuICAgICAgICBUb2FzdDogVG9hc3RcbiAgICAgICAgVG9vbHRpcDogVG9vbHRpcFxuICAgIH1cbn1cblxud2luZG93LkFsZXJ0ID0gQWxlcnQ7XG53aW5kb3cuQnV0dG9uID0gQnV0dG9uO1xud2luZG93LkNhcm91c2VsID0gQ2Fyb3VzZWw7XG53aW5kb3cuQ29sbGFwc2UgPSBDb2xsYXBzZTtcbndpbmRvdy5Ecm9wZG93biA9IERyb3Bkb3duO1xud2luZG93Lk1vZGFsID0gTW9kYWw7XG53aW5kb3cuT2ZmY2FudmFzID0gT2ZmY2FudmFzO1xud2luZG93LlBvcG92ZXIgPSBQb3BvdmVyO1xud2luZG93LlNjcm9sbFNweSA9IFNjcm9sbFNweTtcbndpbmRvdy5UYWIgPSBUYWI7XG53aW5kb3cuVG9hc3QgPSBUb2FzdDtcbndpbmRvdy5Ub29sdGlwID0gVG9vbHRpcDtcbiIsIi8vXG4vLyBjaGVja2xpc3QuanNcbi8vIERhc2hraXQgbW9kdWxlXG4vL1xuXG5pbXBvcnQge1NvcnRhYmxlfSBmcm9tICdAc2hvcGlmeS9kcmFnZ2FibGUnO1xuXG5jb25zdCBjaGVja2xpc3RzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmNoZWNrbGlzdCcpO1xuXG5pZiAoY2hlY2tsaXN0cykge1xuICAgIG5ldyBTb3J0YWJsZShjaGVja2xpc3RzLCB7XG4gICAgICAgIGRyYWdnYWJsZTogJy5mb3JtLWNoZWNrJyxcbiAgICAgICAgaGFuZGxlOiAnLmZvcm0tY2hlY2stbGFiZWwnLFxuICAgICAgICBtaXJyb3I6IHtcbiAgICAgICAgICAgIGNvbnN0cmFpbkRpbWVuc2lvbnM6IHRydWVcbiAgICAgICAgfVxuICAgIH0pO1xufSIsImltcG9ydCAqIGFzIENob2ljZXMgZnJvbSBcImNob2ljZXMuanNcIjtcblxuY29uc3QgdG9nZ2xlcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ1tkYXRhLWNob2ljZXNdJyk7XG5cbmxldCBkZWNvZGVIdG1sU3BlY2lhbENoYXJzID0gKHN0cikgPT4ge1xuICAgIHN0ciA9IHN0ci5yZXBsYWNlKC8mIyhcXGQrKTsvZywgZnVuY3Rpb24obWF0Y2gsIGRlYykge1xuICAgICAgICByZXR1cm4gU3RyaW5nLmZyb21DaGFyQ29kZShkZWMpO1xuICAgIH0pO1xuXG4gICAgc3RyID0gc3RyLnJlcGxhY2UoLyZxdW90Oy9nLCAnXCInKVxuICAgICAgICAucmVwbGFjZSgvJmFtcDsvZywgJyYnKVxuICAgICAgICAucmVwbGFjZSgvJmx0Oy9nLCAnPCcpXG4gICAgICAgIC5yZXBsYWNlKC8mZ3Q7L2csICc+JylcbiAgICAgICAgLnJlcGxhY2UoLyZhcG9zOy9nLCBcIidcIilcbiAgICA7XG5cbiAgICByZXR1cm4gc3RyO1xufVxuXG4vLyBAdHMtaWdub3JlXG5leHBvcnQgZnVuY3Rpb24gaW5pdENob2ljZXModG9nZ2xlRWxlbWVudCwgb3B0aW9uT3ZlcnJpZGVzID0ge30pOiBDaG9pY2VzXG57XG4gICAgbGV0IGRlZmF1bHRPcHRpb25zID0ge1xuICAgICAgICBhbGxvd0hUTUw6IGZhbHNlLFxuICAgICAgICBjbGFzc05hbWVzOiB7XG4gICAgICAgICAgICBjb250YWluZXJJbm5lcjogdG9nZ2xlRWxlbWVudC5jbGFzc05hbWUsXG4gICAgICAgICAgICBpbnB1dDogJ2Zvcm0tY29udHJvbCcsXG4gICAgICAgICAgICBpbnB1dENsb25lZDogJ2Zvcm0tY29udHJvbC1zbScsXG4gICAgICAgICAgICBsaXN0RHJvcGRvd246ICdkcm9wZG93bi1tZW51JyxcbiAgICAgICAgICAgIGl0ZW1DaG9pY2U6ICdkcm9wZG93bi1pdGVtJyxcbiAgICAgICAgICAgIGFjdGl2ZVN0YXRlOiAnc2hvdycsXG4gICAgICAgICAgICBzZWxlY3RlZFN0YXRlOiAnYWN0aXZlJyxcbiAgICAgICAgfSxcbiAgICAgICAgc2hvdWxkU29ydDogZmFsc2UsXG4gICAgICAgIGNhbGxiYWNrT25DcmVhdGVUZW1wbGF0ZXM6IGZ1bmN0aW9uICh0ZW1wbGF0ZSkge1xuICAgICAgICAgICAgcmV0dXJuIHtcbiAgICAgICAgICAgICAgICBjaG9pY2U6IChvcHRpb25zLCBkYXRhKSA9PiB7XG4gICAgICAgICAgICAgICAgICAgIGNvbnN0IGNsYXNzTmFtZXMgPSBvcHRpb25zLmNsYXNzTmFtZXM7XG5cbiAgICAgICAgICAgICAgICAgICAgY29uc3QgY2xhc3NlcyA9IGAke2NsYXNzTmFtZXMuaXRlbX0gJHtjbGFzc05hbWVzLml0ZW1DaG9pY2V9ICR7XG4gICAgICAgICAgICAgICAgICAgICAgICBkYXRhLmRpc2FibGVkID8gY2xhc3NOYW1lcy5pdGVtRGlzYWJsZWQgOiBjbGFzc05hbWVzLml0ZW1TZWxlY3RhYmxlXG4gICAgICAgICAgICAgICAgICAgIH1gO1xuXG4gICAgICAgICAgICAgICAgICAgIGNvbnN0IGRpc2FibGVkID0gZGF0YS5kaXNhYmxlZCA/ICdkYXRhLWNob2ljZS1kaXNhYmxlZCBhcmlhLWRpc2FibGVkPVwidHJ1ZVwiJyA6ICdkYXRhLWNob2ljZS1zZWxlY3RhYmxlJztcbiAgICAgICAgICAgICAgICAgICAgY29uc3Qgcm9sZSA9IGRhdGEuZ3JvdXBJZCA+IDAgPyAncm9sZT1cInRyZWVpdGVtXCInIDogJ3JvbGU9XCJvcHRpb25cIic7XG4gICAgICAgICAgICAgICAgICAgIGNvbnN0IHNlbGVjdFRleHQgPSB0aGlzLmNvbmZpZy5pdGVtU2VsZWN0VGV4dDtcblxuICAgICAgICAgICAgICAgICAgICBsZXQgbGFiZWwgPSAnJztcblxuICAgICAgICAgICAgICAgICAgICBpZiAoZGF0YS5jdXN0b21Qcm9wZXJ0aWVzICYmIGRhdGEuY3VzdG9tUHJvcGVydGllcy5hdmF0YXJTcmMpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGxhYmVsID0gYDxkaXYgY2xhc3M9XCJhdmF0YXIgYXZhdGFyLXhzIG1lLTNcIj5gXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgKyBgICAgIDxpbWcgY2xhc3M9XCJhdmF0YXItaW1nIHJvdW5kZWQtY2lyY2xlXCIgc3JjPVwiJHtkYXRhLmN1c3RvbVByb3BlcnRpZXMuYXZhdGFyU3JjfVwiIGFsdD1cIiR7ZGF0YS5sYWJlbH1cIiA+YFxuICAgICAgICAgICAgICAgICAgICAgICAgICAgICsgYDwvZGl2PiBgO1xuICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgbGFiZWwgKz0gZGF0YS5sYWJlbDtcblxuICAgICAgICAgICAgICAgICAgICByZXR1cm4gdGVtcGxhdGUoYDxkaXYgY2xhc3M9XCIke2NsYXNzZXN9XCIgZGF0YS1zZWxlY3QtdGV4dD1cIiR7c2VsZWN0VGV4dH1cIiBkYXRhLWNob2ljZSAke2Rpc2FibGVkfSBkYXRhLWlkPVwiJHtkYXRhLmlkfVwiIGRhdGEtdmFsdWU9XCIke2RhdGEudmFsdWV9XCIgJHtyb2xlfT4ke2xhYmVsfTwvZGl2PmApO1xuICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICB9O1xuICAgICAgICB9LFxuICAgIH07XG5cbiAgICBpZiAodG9nZ2xlRWxlbWVudC5tdWx0aXBsZSkge1xuICAgICAgICBkZWZhdWx0T3B0aW9uc1sncmVtb3ZlSXRlbUJ1dHRvbiddID0gdHJ1ZTtcbiAgICB9XG5cbiAgICBjb25zdCBvcHRpb25zID0ge1xuICAgICAgICAuLi5vcHRpb25PdmVycmlkZXMsXG4gICAgICAgIC4uLmRlZmF1bHRPcHRpb25zLFxuICAgIH07XG5cbiAgICAvLyBAdHMtaWdub3JlXG4gICAgcmV0dXJuIHRvZ2dsZUVsZW1lbnQuY2hvaWNlcyA9IG5ldyBDaG9pY2VzKHRvZ2dsZUVsZW1lbnQsIG9wdGlvbnMpO1xufVxuXG50b2dnbGVzLmZvckVhY2goKHRvZ2dsZTogSFRNTFNlbGVjdEVsZW1lbnR8SFRNTElucHV0RWxlbWVudCkgPT4ge1xuICAgIC8vIERlY29kZSBmcm9tIFBIUCdzIGh0bWxzcGVjaWFsY2hhcnNcbiAgICBsZXQgZGF0YUNob2ljZXMgPSB0b2dnbGUuZ2V0QXR0cmlidXRlKFwiZGF0YS1jaG9pY2VzXCIpO1xuXG4gICAgaWYgKGRhdGFDaG9pY2VzKSB7XG4gICAgICAgIGRhdGFDaG9pY2VzID0gZGVjb2RlSHRtbFNwZWNpYWxDaGFycyhkYXRhQ2hvaWNlcyk7XG4gICAgfVxuXG4gICAgY29uc3QgZWxlbWVudE9wdGlvbnMgPSBkYXRhQ2hvaWNlcyA/IEpTT04ucGFyc2UoZGF0YUNob2ljZXMpIDoge307XG5cbiAgICBpbml0Q2hvaWNlcyh0b2dnbGUsIGVsZW1lbnRPcHRpb25zKTtcbn0pO1xuXG4vLyBNYWtlIGF2YWlsYWJsZSBnbG9iYWxseVxuKDxhbnk+d2luZG93KS5DaG9pY2VzID0gQ2hvaWNlczsiLCIvL1xuLy8gZHJvcHpvbmUuanNcbi8vIFRoZW1lIG1vZHVsZVxuLy9cblxuaW1wb3J0IERyb3B6b25lIGZyb20gJ2Ryb3B6b25lJztcblxuRHJvcHpvbmUuYXV0b0Rpc2NvdmVyID0gZmFsc2U7XG5Ecm9wem9uZS50aHVtYm5haWxXaWR0aCA9IG51bGw7XG5Ecm9wem9uZS50aHVtYm5haWxIZWlnaHQgPSBudWxsO1xuXG5jb25zdCB0b2dnbGVzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnW2RhdGEtZHJvcHpvbmVdJyk7XG5cbnRvZ2dsZXMuZm9yRWFjaCgodG9nZ2xlKSA9PiB7XG4gICAgbGV0IGN1cnJlbnRGaWxlID0gdW5kZWZpbmVkO1xuXG4gICAgY29uc3QgZWxlbWVudE9wdGlvbnMgPSB0b2dnbGUuZ2V0QXR0cmlidXRlKFwiZGF0YS1kcm9wem9uZVwiKSA/IEpTT04ucGFyc2UodG9nZ2xlLmdldEF0dHJpYnV0ZShcImRhdGEtZHJvcHpvbmVcIikpIDoge307XG5cbiAgICBjb25zdCBkZWZhdWx0T3B0aW9ucyA9IHtcbiAgICAgICAgcHJldmlld3NDb250YWluZXI6IHRvZ2dsZS5xdWVyeVNlbGVjdG9yKCcuZHotcHJldmlldycpLFxuICAgICAgICBwcmV2aWV3VGVtcGxhdGU6IHRvZ2dsZS5xdWVyeVNlbGVjdG9yKCcuZHotcHJldmlldycpLmlubmVySFRNTCxcbiAgICAgICAgaW5pdDogZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgdGhpcy5vbignYWRkZWRmaWxlJywgZnVuY3Rpb24gKGZpbGUpIHtcbiAgICAgICAgICAgICAgICBjb25zdCBtYXhGaWxlcyA9IGVsZW1lbnRPcHRpb25zLm1heEZpbGVzO1xuXG4gICAgICAgICAgICAgICAgaWYgKG1heEZpbGVzID09IDEgJiYgY3VycmVudEZpbGUpIHtcbiAgICAgICAgICAgICAgICAgICAgdGhpcy5yZW1vdmVGaWxlKGN1cnJlbnRGaWxlKTtcbiAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICBjdXJyZW50RmlsZSA9IGZpbGU7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSxcbiAgICB9O1xuXG4gICAgY29uc3Qgb3B0aW9ucyA9IHtcbiAgICAgICAgLi4uZWxlbWVudE9wdGlvbnMsXG4gICAgICAgIC4uLmRlZmF1bHRPcHRpb25zLFxuICAgIH07XG5cbiAgICAvLyBDbGVhciBwcmV2aWV3XG4gICAgdG9nZ2xlLnF1ZXJ5U2VsZWN0b3IoJy5kei1wcmV2aWV3JykuaW5uZXJIVE1MID0gJyc7XG5cbiAgICAvLyBJbml0IGRyb3B6b25lXG4gICAgbmV3IERyb3B6b25lKHRvZ2dsZSwgb3B0aW9ucyk7XG59KTtcblxuLy8gTWFrZSBhdmFpbGFibGUgZ2xvYmFsbHlcbmRlY2xhcmUgZ2xvYmFsIHtcbiAgICBpbnRlcmZhY2UgV2luZG93IHtcbiAgICAgICAgRHJvcHpvbmU6IERyb3B6b25lO1xuICAgIH1cbn1cblxud2luZG93LkRyb3B6b25lID0gRHJvcHpvbmU7IiwiLy9cbi8vIGZsYXRwaWNrci5qc1xuLy8gVGhlbWUgbW9kdWxlXG4vL1xuXG5pbXBvcnQgZmxhdHBpY2tyIGZyb20gJ2ZsYXRwaWNrcic7XG5cbmNvbnN0IHRvZ2dsZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS1mbGF0cGlja3JdJyk7XG5cbnRvZ2dsZXMuZm9yRWFjaCgodG9nZ2xlKSA9PiB7XG4gICAgY29uc3Qgb3B0aW9ucyA9IHRvZ2dsZS5nZXRBdHRyaWJ1dGUoXCJkYXRhLWZsYXRwaWNrclwiKSA/IEpTT04ucGFyc2UodG9nZ2xlLmdldEF0dHJpYnV0ZShcImRhdGEtZmxhdHBpY2tyXCIpKSA6IHt9O1xuXG4gICAgZmxhdHBpY2tyKHRvZ2dsZSwgb3B0aW9ucyk7XG59KTtcblxuLy8gTWFrZSBhdmFpbGFibGUgZ2xvYmFsbHlcbmRlY2xhcmUgZ2xvYmFsIHtcbiAgICBpbnRlcmZhY2UgV2luZG93IHtcbiAgICAgICAgZmxhdHBpY2tyOiBhbnk7XG4gICAgfVxufVxuXG53aW5kb3cuZmxhdHBpY2tyID0gZmxhdHBpY2tyOyIsIi8vXG4vLyBpbnB1dG1hc2suanNcbi8vIFRoZW1lIG1vZHVsZVxuLy9cblxuaW1wb3J0IElucHV0bWFzayBmcm9tICdpbnB1dG1hc2snO1xuXG5jb25zdCB0b2dnbGVzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnW2RhdGEtaW5wdXRtYXNrXScpO1xuXG5jb25zdCBvcHRpb25zID0ge1xuICAgIHJpZ2h0QWxpZ246IGZhbHNlLFxufTtcblxuSW5wdXRtYXNrKG9wdGlvbnMpLm1hc2sodG9nZ2xlcyk7XG5cbi8vIE1ha2UgYXZhaWxhYmxlIGdsb2JhbGx5XG5kZWNsYXJlIGdsb2JhbCB7XG4gICAgaW50ZXJmYWNlIFdpbmRvdyB7XG4gICAgICAgIElucHV0TWFzazogSW5wdXRtYXNrO1xuICAgIH1cbn1cblxud2luZG93LklucHV0TWFzayA9IElucHV0bWFzaztcbiIsIi8vXG4vLyBrYW5iYW4uanNcbi8vIERhc2hraXQgbW9kdWxlXG4vL1xuXG5pbXBvcnQge1NvcnRhYmxlfSBmcm9tICdAc2hvcGlmeS9kcmFnZ2FibGUnO1xuXG5jb25zdCBjYXRlZ29yaWVzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmthbmJhbi1jYXRlZ29yeScpO1xuY29uc3QgbGlua3MgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcua2FuYmFuLWFkZC1saW5rJyk7XG5jb25zdCBmb3JtcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5rYW5iYW4tYWRkLWZvcm0nKTtcblxuZnVuY3Rpb24gdG9nZ2xlSXRlbXMoZWwpIHtcbiAgICBjb25zdCBwYXJlbnQgPSBlbC5jbG9zZXN0KCcua2FuYmFuLWFkZCcpO1xuICAgIGNvbnN0IGNhcmQgPSBwYXJlbnQucXVlcnlTZWxlY3RvcignLmNhcmQnKTtcbiAgICBjb25zdCBsaW5rID0gcGFyZW50LnF1ZXJ5U2VsZWN0b3IoJy5rYW5iYW4tYWRkLWxpbmsnKTtcbiAgICBjb25zdCBmb3JtID0gcGFyZW50LnF1ZXJ5U2VsZWN0b3IoJy5rYW5iYW4tYWRkLWZvcm0nKTtcblxuICAgIGxpbmsuY2xhc3NMaXN0LnRvZ2dsZSgnZC1ub25lJyk7XG4gICAgZm9ybS5jbGFzc0xpc3QudG9nZ2xlKCdkLW5vbmUnKTtcblxuICAgIGlmIChjYXJkICYmIGNhcmQuY2xhc3NMaXN0LmNvbnRhaW5zKCdjYXJkLXNtJykpIHtcbiAgICAgICAgaWYgKGNhcmQuY2xhc3NMaXN0LmNvbnRhaW5zKCdjYXJkLWZsdXNoJykpIHtcbiAgICAgICAgICAgIGNhcmQuY2xhc3NMaXN0LnJlbW92ZSgnY2FyZC1mbHVzaCcpO1xuICAgICAgICB9IGVsc2Uge1xuICAgICAgICAgICAgY2FyZC5jbGFzc0xpc3QuYWRkKCdjYXJkLWZsdXNoJyk7XG4gICAgICAgIH1cbiAgICB9XG59XG5cbmlmIChjYXRlZ29yaWVzKSB7XG4gICAgbmV3IFNvcnRhYmxlKGNhdGVnb3JpZXMsIHtcbiAgICAgICAgZHJhZ2dhYmxlOiAnLmthbmJhbi1pdGVtJyxcbiAgICAgICAgbWlycm9yOiB7XG4gICAgICAgICAgICBjb25zdHJhaW5EaW1lbnNpb25zOiB0cnVlLFxuICAgICAgICB9LFxuICAgIH0pO1xufVxuXG5saW5rcy5mb3JFYWNoKChsaW5rKSA9PiB7XG4gICAgbGluay5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHtcbiAgICAgICAgdG9nZ2xlSXRlbXMobGluayk7XG4gICAgfSk7XG59KTtcblxuZm9ybXMuZm9yRWFjaCgoZm9ybSkgPT4ge1xuICAgIGZvcm0uYWRkRXZlbnRMaXN0ZW5lcigncmVzZXQnLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgIHRvZ2dsZUl0ZW1zKGZvcm0pO1xuICAgIH0pO1xuXG4gICAgZm9ybS5hZGRFdmVudExpc3RlbmVyKCdzdWJtaXQnLCBmdW5jdGlvbiAoZSkge1xuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgfSk7XG59KTtcblxuLy8gTWFrZSBhdmFpbGFibGUgZ2xvYmFsbHlcbmRlY2xhcmUgZ2xvYmFsIHtcbiAgICBpbnRlcmZhY2UgV2luZG93IHtcbiAgICAgICAgU29ydGFibGU6IFNvcnRhYmxlO1xuICAgIH1cbn1cblxud2luZG93LlNvcnRhYmxlID0gU29ydGFibGU7IiwiLy9cbi8vIGxpc3QuanNcbi8vIFRoZW1lIG1vZHVsZVxuLy9cblxuaW1wb3J0IExpc3QgZnJvbSAnbGlzdC5qcyc7XG5cbmV4cG9ydCBkZWZhdWx0IChmdW5jdGlvbiAoKSB7XG4gICAgY29uc3QgbGlzdHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS1saXN0XScpO1xuICAgIGNvbnN0IHNvcnRzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnW2RhdGEtc29ydF0nKTtcblxuICAgIGZ1bmN0aW9uIGluaXQobGlzdCkge1xuICAgICAgICBjb25zdCBsaXN0QWxlcnQgPSBsaXN0LnF1ZXJ5U2VsZWN0b3IoJy5saXN0LWFsZXJ0Jyk7XG4gICAgICAgIGNvbnN0IGxpc3RBbGVydENvdW50ID0gbGlzdC5xdWVyeVNlbGVjdG9yKCcubGlzdC1hbGVydC1jb3VudCcpO1xuICAgICAgICBjb25zdCBsaXN0QWxlcnRDbG9zZSA9IGxpc3QucXVlcnlTZWxlY3RvcignLmxpc3QtYWxlcnQgLmJ0bi1jbG9zZScpO1xuICAgICAgICBjb25zdCBsaXN0Q2hlY2tib3hlcyA9IGxpc3QucXVlcnlTZWxlY3RvckFsbCgnLmxpc3QtY2hlY2tib3gnKTtcbiAgICAgICAgY29uc3QgbGlzdENoZWNrYm94QWxsID0gbGlzdC5xdWVyeVNlbGVjdG9yKCcubGlzdC1jaGVja2JveC1hbGwnKTtcbiAgICAgICAgY29uc3QgbGlzdFBhZ2luYXRpb24gPSBsaXN0LnF1ZXJ5U2VsZWN0b3JBbGwoJy5saXN0LXBhZ2luYXRpb24nKTtcbiAgICAgICAgY29uc3QgbGlzdFBhZ2luYXRpb25QcmV2ID0gbGlzdC5xdWVyeVNlbGVjdG9yKCcubGlzdC1wYWdpbmF0aW9uLXByZXYnKTtcbiAgICAgICAgY29uc3QgbGlzdFBhZ2luYXRpb25OZXh0ID0gbGlzdC5xdWVyeVNlbGVjdG9yKCcubGlzdC1wYWdpbmF0aW9uLW5leHQnKTtcbiAgICAgICAgY29uc3QgbGlzdE9wdGlvbnMgPSBsaXN0LmRhdGFzZXQubGlzdCAmJiBKU09OLnBhcnNlKGxpc3QuZGF0YXNldC5saXN0KTtcblxuICAgICAgICBjb25zdCBkZWZhdWx0T3B0aW9ucyA9IHtcbiAgICAgICAgICAgIGxpc3RDbGFzczogJ2xpc3QnLFxuICAgICAgICAgICAgc2VhcmNoQ2xhc3M6ICdsaXN0LXNlYXJjaCcsXG4gICAgICAgICAgICBzb3J0Q2xhc3M6ICdsaXN0LXNvcnQnLFxuICAgICAgICB9O1xuXG4gICAgICAgIC8vIE1lcmdlIG9wdGlvbnNcbiAgICAgICAgY29uc3Qgb3B0aW9ucyA9IE9iamVjdC5hc3NpZ24oZGVmYXVsdE9wdGlvbnMsIGxpc3RPcHRpb25zKTtcblxuICAgICAgICAvLyBJbml0XG4gICAgICAgIGNvbnN0IGxpc3RPYmogPSBuZXcgTGlzdChsaXN0LCBvcHRpb25zKTtcblxuICAgICAgICAvLyBQYWdpbmF0aW9uXG4gICAgICAgIGlmIChsaXN0UGFnaW5hdGlvbikge1xuICAgICAgICAgICAgW10uZm9yRWFjaC5jYWxsKGxpc3RQYWdpbmF0aW9uLCBmdW5jdGlvbiAocGFnaW5hdGlvbikge1xuICAgICAgICAgICAgICAgIHBhZ2luYXRpb24uYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuXG4gICAgICAgIC8vIFBhZ2luYXRpb24gKG5leHQpXG4gICAgICAgIGlmIChsaXN0UGFnaW5hdGlvbk5leHQpIHtcbiAgICAgICAgICAgIGxpc3RQYWdpbmF0aW9uTmV4dC5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XG4gICAgICAgICAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuXG4gICAgICAgICAgICAgICAgY29uc3QgbmV4dEl0ZW0gPSBwYXJzZUludChsaXN0T2JqLmkpICsgcGFyc2VJbnQobGlzdE9iai5wYWdlKTtcblxuICAgICAgICAgICAgICAgIGlmIChuZXh0SXRlbSA8PSBsaXN0T2JqLnNpemUoKSkge1xuICAgICAgICAgICAgICAgICAgICBsaXN0T2JqLnNob3cobmV4dEl0ZW0sIGxpc3RPYmoucGFnZSk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cblxuICAgICAgICAvLyBQYWdpbmF0aW9uIChwcmV2KVxuICAgICAgICBpZiAobGlzdFBhZ2luYXRpb25QcmV2KSB7XG4gICAgICAgICAgICBsaXN0UGFnaW5hdGlvblByZXYuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcblxuICAgICAgICAgICAgICAgIGNvbnN0IHByZXZJdGVtID0gcGFyc2VJbnQobGlzdE9iai5pKSAtIHBhcnNlSW50KGxpc3RPYmoucGFnZSk7XG5cbiAgICAgICAgICAgICAgICBpZiAocHJldkl0ZW0gPiAwKSB7XG4gICAgICAgICAgICAgICAgICAgIGxpc3RPYmouc2hvdyhwcmV2SXRlbSwgbGlzdE9iai5wYWdlKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuXG4gICAgICAgIC8vIENoZWNrYm94ZXNcbiAgICAgICAgaWYgKGxpc3RDaGVja2JveGVzKSB7XG4gICAgICAgICAgICBbXS5mb3JFYWNoLmNhbGwobGlzdENoZWNrYm94ZXMsIGZ1bmN0aW9uIChjaGVja2JveCkge1xuICAgICAgICAgICAgICAgIGNoZWNrYm94LmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICAgICAgY291bnRDaGVja2JveGVzKGxpc3RDaGVja2JveGVzLCBsaXN0QWxlcnQsIGxpc3RBbGVydENvdW50KTtcblxuICAgICAgICAgICAgICAgICAgICBpZiAobGlzdENoZWNrYm94QWxsKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBsaXN0Q2hlY2tib3hBbGwuY2hlY2tlZCA9IGZhbHNlO1xuICAgICAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuXG4gICAgICAgIC8vIENoZWNrYm94XG4gICAgICAgIGlmIChsaXN0Q2hlY2tib3hBbGwpIHtcbiAgICAgICAgICAgIGxpc3RDaGVja2JveEFsbC5hZGRFdmVudExpc3RlbmVyKCdjaGFuZ2UnLCBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICAgICAgW10uZm9yRWFjaC5jYWxsKGxpc3RDaGVja2JveGVzLCBmdW5jdGlvbiAoY2hlY2tib3gpIHtcbiAgICAgICAgICAgICAgICAgICAgY2hlY2tib3guY2hlY2tlZCA9IGxpc3RDaGVja2JveEFsbC5jaGVja2VkO1xuICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAgICAgY291bnRDaGVja2JveGVzKGxpc3RDaGVja2JveGVzLCBsaXN0QWxlcnQsIGxpc3RBbGVydENvdW50KTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG5cbiAgICAgICAgLy8gQWxlcnRcbiAgICAgICAgaWYgKGxpc3RBbGVydENsb3NlKSB7XG4gICAgICAgICAgICBsaXN0QWxlcnRDbG9zZS5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XG4gICAgICAgICAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuXG4gICAgICAgICAgICAgICAgaWYgKGxpc3RDaGVja2JveEFsbCkge1xuICAgICAgICAgICAgICAgICAgICBsaXN0Q2hlY2tib3hBbGwuY2hlY2tlZCA9IGZhbHNlO1xuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgIFtdLmZvckVhY2guY2FsbChsaXN0Q2hlY2tib3hlcywgZnVuY3Rpb24gKGNoZWNrYm94KSB7XG4gICAgICAgICAgICAgICAgICAgIGNoZWNrYm94LmNoZWNrZWQgPSBmYWxzZTtcbiAgICAgICAgICAgICAgICB9KTtcblxuICAgICAgICAgICAgICAgIGNvdW50Q2hlY2tib3hlcyhsaXN0Q2hlY2tib3hlcywgbGlzdEFsZXJ0LCBsaXN0QWxlcnRDb3VudCk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIGZ1bmN0aW9uIGNvdW50Q2hlY2tib3hlcyhsaXN0Q2hlY2tib3hlcywgbGlzdEFsZXJ0LCBsaXN0QWxlcnRDb3VudCkge1xuICAgICAgICBjb25zdCBjaGVja2VkID0gW10uc2xpY2UuY2FsbChsaXN0Q2hlY2tib3hlcykuZmlsdGVyKGZ1bmN0aW9uIChjaGVja2JveCkge1xuICAgICAgICAgICAgcmV0dXJuIGNoZWNrYm94LmNoZWNrZWQ7XG4gICAgICAgIH0pO1xuXG4gICAgICAgIGlmIChsaXN0QWxlcnQpIHtcbiAgICAgICAgICAgIGNoZWNrZWQubGVuZ3RoID8gbGlzdEFsZXJ0LmNsYXNzTGlzdC5hZGQoJ3Nob3cnKSA6IGxpc3RBbGVydC5jbGFzc0xpc3QucmVtb3ZlKCdzaG93Jyk7XG4gICAgICAgICAgICBsaXN0QWxlcnRDb3VudC5pbm5lckhUTUwgPSBjaGVja2VkLmxlbmd0aDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIGlmICh0eXBlb2YgTGlzdCAhPT0gJ3VuZGVmaW5lZCcgJiYgbGlzdHMpIHtcbiAgICAgICAgW10uZm9yRWFjaC5jYWxsKGxpc3RzLCBmdW5jdGlvbiAobGlzdCkge1xuICAgICAgICAgICAgaW5pdChsaXN0KTtcbiAgICAgICAgfSk7XG4gICAgfVxuXG4gICAgaWYgKHR5cGVvZiBMaXN0ICE9PSAndW5kZWZpbmVkJyAmJiBzb3J0cykge1xuICAgICAgICBbXS5mb3JFYWNoLmNhbGwoc29ydHMsIGZ1bmN0aW9uIChzb3J0KSB7XG4gICAgICAgICAgICBzb3J0LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSk7XG4gICAgfVxufSkoKTtcblxuLy8gTWFrZSBhdmFpbGFibGUgZ2xvYmFsbHlcbmRlY2xhcmUgZ2xvYmFsIHtcbiAgICBpbnRlcmZhY2UgV2luZG93IHtcbiAgICAgICAgTGlzdDogTGlzdDtcbiAgICB9XG59XG5cbndpbmRvdy5MaXN0ID0gTGlzdDsiLCIvL1xuLy8gbWFwLmpzXG4vLyBUaGVtZSBtb2R1bGVcbi8vXG5cbmltcG9ydCB7IG1hcGJveGdsIH0gZnJvbSAnbWFwYm94LWdsJztcblxuY29uc3QgbWFwcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ1tkYXRhLW1hcF0nKTtcbmNvbnN0IGFjY2Vzc1Rva2VuID0gJ3BrLmV5SjFJam9pWjI5dlpIUm9aVzFsY3lJc0ltRWlPaUpqYW5VNWVIUjROMmN5YkRVNU5HVndPSFp3TkdwcmIzRTBJbjAubXNkdzlxMTZkaDh2NGF6SlhVZGlYZyc7XG5cbmlmICh0eXBlb2YgbWFwYm94Z2wgIT09ICd1bmRlZmluZWQnKSB7XG4gICAgbWFwcy5mb3JFYWNoKG1hcCA9PiB7XG4gICAgICAgIGNvbnN0IGVsZW1lbnRPcHRpb25zID0gbWFwLmdldEF0dHJpYnV0ZShcImRhdGEtbWFwXCIpID8gSlNPTi5wYXJzZShtYXAuZ2V0QXR0cmlidXRlKFwiZGF0YS1tYXBcIikpIDoge307XG5cbiAgICAgICAgY29uc3QgZGVmYXVsdE9wdGlvbnMgPSB7XG4gICAgICAgICAgICBjb250YWluZXI6IG1hcCxcbiAgICAgICAgICAgIHN0eWxlOiAnbWFwYm94Oi8vc3R5bGVzL21hcGJveC9saWdodC12OScsXG4gICAgICAgICAgICBzY3JvbGxab29tOiBmYWxzZSxcbiAgICAgICAgICAgIGludGVyYWN0aXZlOiBmYWxzZVxuICAgICAgICB9XG5cbiAgICAgICAgY29uc3Qgb3B0aW9ucyA9IHtcbiAgICAgICAgICAgIC4uLmVsZW1lbnRPcHRpb25zLFxuICAgICAgICAgICAgLi4uZGVmYXVsdE9wdGlvbnNcbiAgICAgICAgfTtcblxuICAgICAgICAvLyBHZXQgYWNjZXNzIHRva2VuXG4gICAgICAgIG1hcGJveGdsLmFjY2Vzc1Rva2VuID0gYWNjZXNzVG9rZW47XG5cbiAgICAgICAgLy8gSW5pdCBtYXBcbiAgICAgICAgbmV3IG1hcGJveGdsLk1hcChvcHRpb25zKTtcbiAgICB9KVxufVxuIiwiLy9cbi8vIG5hdmJhci5qc1xuLy8gVGhlbWUgbW9kdWxlXG4vL1xuXG5pbXBvcnQge0NvbGxhcHNlfSBmcm9tICdib290c3RyYXAnO1xuXG5jb25zdCBjb2xsYXBzZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcubmF2YmFyLW5hdiAuY29sbGFwc2UnKTtcblxuY29sbGFwc2VzLmZvckVhY2goY29sbGFwc2UgPT4ge1xuICAgIC8vIEluaXQgY29sbGFwc2VzXG4gICAgY29uc3QgY29sbGFwc2VJbnN0YW5jZSA9IG5ldyBDb2xsYXBzZShjb2xsYXBzZSwge1xuICAgICAgICB0b2dnbGU6IGZhbHNlXG4gICAgfSk7XG5cbiAgICAvLyBIaWRlIHNpYmxpbmcgY29sbGFwc2VzIG9uIGBzaG93LmJzLmNvbGxhcHNlYFxuICAgIGNvbGxhcHNlLmFkZEV2ZW50TGlzdGVuZXIoJ3Nob3cuYnMuY29sbGFwc2UnLCAoZSkgPT4ge1xuICAgICAgICBlLnN0b3BQcm9wYWdhdGlvbigpO1xuXG4gICAgICAgIGNvbnN0IGNsb3Nlc3RDb2xsYXBzZSA9IGNvbGxhcHNlLnBhcmVudEVsZW1lbnQuY2xvc2VzdCgnLmNvbGxhcHNlJyk7XG4gICAgICAgIGNvbnN0IHNpYmxpbmdDb2xsYXBzZXMgPSBjbG9zZXN0Q29sbGFwc2UucXVlcnlTZWxlY3RvckFsbCgnLmNvbGxhcHNlJyk7XG5cbiAgICAgICAgc2libGluZ0NvbGxhcHNlcy5mb3JFYWNoKHNpYmxpbmdDb2xsYXBzZSA9PiB7XG4gICAgICAgICAgICBjb25zdCBzaWJsaW5nQ29sbGFwc2VJbnN0YW5jZSA9IENvbGxhcHNlLmdldEluc3RhbmNlKHNpYmxpbmdDb2xsYXBzZSk7XG5cbiAgICAgICAgICAgIGlmIChzaWJsaW5nQ29sbGFwc2VJbnN0YW5jZSA9PT0gY29sbGFwc2VJbnN0YW5jZSkge1xuICAgICAgICAgICAgICAgIHJldHVybjtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgc2libGluZ0NvbGxhcHNlSW5zdGFuY2UuaGlkZSgpO1xuICAgICAgICB9KTtcbiAgICB9KTtcblxuICAgIC8vIEhpZGUgbmVzdGVkIGNvbGxhcHNlcyBvbiBgaGlkZS5icy5jb2xsYXBzZWBcbiAgICBjb2xsYXBzZS5hZGRFdmVudExpc3RlbmVyKCdoaWRlLmJzLmNvbGxhcHNlJywgKGUpID0+IHtcbiAgICAgICAgZS5zdG9wUHJvcGFnYXRpb24oKTtcblxuICAgICAgICBjb25zdCBjaGlsZENvbGxhcHNlcyA9IGNvbGxhcHNlLnF1ZXJ5U2VsZWN0b3JBbGwoJy5jb2xsYXBzZScpO1xuXG4gICAgICAgIGNoaWxkQ29sbGFwc2VzLmZvckVhY2goY2hpbGRDb2xsYXBzZSA9PiB7XG4gICAgICAgICAgICBjb25zdCBjaGlsZENvbGxhcHNlSW5zdGFuY2UgPSBDb2xsYXBzZS5nZXRJbnN0YW5jZShjaGlsZENvbGxhcHNlKTtcblxuICAgICAgICAgICAgY2hpbGRDb2xsYXBzZUluc3RhbmNlLmhpZGUoKTtcbiAgICAgICAgfSk7XG4gICAgfSk7XG59KTsiLCIvL1xuLy8gbmF2YmFyLWRyb3Bkb3duLmpzXG4vL1xuXG5pbXBvcnQge0Ryb3Bkb3dufSBmcm9tICdib290c3RyYXAnO1xuXG5jb25zdCBzZWxlY3RvcnMgPSAnLm5hdmJhciAuZHJvcHVwLCAubmF2YmFyIC5kcm9wZW5kLCAubmF2YmFyIC5kcm9wZG93biwgLm5hdmJhciAuZHJvcHN0YXJ0JztcbmNvbnN0IGRyb3Bkb3ducyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoc2VsZWN0b3JzKTtcbmNvbnN0IE5BVkJBUl9CUkVBS1BPSU5UID0gNzY3O1xuXG5pZiAod2luZG93LmlubmVyV2lkdGggPiBOQVZCQVJfQlJFQUtQT0lOVCkge1xuICAgIGRyb3Bkb3ducy5mb3JFYWNoKChkcm9wZG93bikgPT4ge1xuICAgICAgICBjb25zdCB0b2dnbGUgPSBkcm9wZG93bi5xdWVyeVNlbGVjdG9yKCdbZGF0YS1icy10b2dnbGU9XCJkcm9wZG93blwiXScpO1xuICAgICAgICBjb25zdCBpbnN0YW5jZSA9IG5ldyBEcm9wZG93bih0b2dnbGUpO1xuXG4gICAgICAgIGRyb3Bkb3duLmFkZEV2ZW50TGlzdGVuZXIoJ21vdXNlZW50ZXInLCAoKSA9PiB7XG4gICAgICAgICAgICBpbnN0YW5jZS5zaG93KCk7XG4gICAgICAgIH0pO1xuXG4gICAgICAgIGRyb3Bkb3duLmFkZEV2ZW50TGlzdGVuZXIoJ21vdXNlbGVhdmUnLCAoKSA9PiB7XG4gICAgICAgICAgICBpbnN0YW5jZS5oaWRlKCk7XG4gICAgICAgIH0pO1xuICAgIH0pO1xufVxuIiwiLy9cbi8vIHBvcG92ZXIuanNcbi8vIFRoZW1lIG1vZHVsZVxuLy9cblxuaW1wb3J0IHtQb3BvdmVyfSBmcm9tICdib290c3RyYXAnO1xuXG5jb25zdCBwb3BvdmVycyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ1tkYXRhLWJzLXRvZ2dsZT1cInBvcG92ZXJcIl0nKTtcblxucG9wb3ZlcnMuZm9yRWFjaChwb3BvdmVyID0+IHtcbiAgICBuZXcgUG9wb3Zlcihwb3BvdmVyKTtcbn0pOyIsIi8vXG4vLyBxdWlsbC5qc1xuLy8gVGhlbWUgbW9kdWxlXG4vL1xuXG5pbXBvcnQgUXVpbGwgZnJvbSAncXVpbGwnO1xuXG5jb25zdCB0b2dnbGVzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnW2RhdGEtcXVpbGxdJyk7XG5cbnRvZ2dsZXMuZm9yRWFjaCgodG9nZ2xlKSA9PiB7XG4gICAgY29uc3QgZWxlbWVudE9wdGlvbnMgPSB0b2dnbGUuZ2V0QXR0cmlidXRlKFwiZGF0YS1xdWlsbFwiKSA/IEpTT04ucGFyc2UodG9nZ2xlLmdldEF0dHJpYnV0ZShcImRhdGEtcXVpbGxcIikpIDoge307XG5cbiAgICBjb25zdCBkZWZhdWx0T3B0aW9ucyA9IHtcbiAgICAgICAgbW9kdWxlczoge1xuICAgICAgICAgICAgdG9vbGJhcjogW1xuICAgICAgICAgICAgICAgIFsnYm9sZCcsICdpdGFsaWMnXSxcbiAgICAgICAgICAgICAgICBbJ2xpbmsnLCAnYmxvY2txdW90ZScsICdjb2RlJywgJ2ltYWdlJ10sXG4gICAgICAgICAgICAgICAgW1xuICAgICAgICAgICAgICAgICAgICB7XG4gICAgICAgICAgICAgICAgICAgICAgICBsaXN0OiAnb3JkZXJlZCcsXG4gICAgICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGxpc3Q6ICdidWxsZXQnLFxuICAgICAgICAgICAgICAgICAgICB9LFxuICAgICAgICAgICAgICAgIF0sXG4gICAgICAgICAgICBdLFxuICAgICAgICB9LFxuICAgICAgICB0aGVtZTogJ3Nub3cnLFxuICAgIH07XG5cbiAgICBjb25zdCBvcHRpb25zID0ge1xuICAgICAgICAuLi5lbGVtZW50T3B0aW9ucyxcbiAgICAgICAgLi4uZGVmYXVsdE9wdGlvbnMsXG4gICAgfTtcblxuICAgIG5ldyBRdWlsbCh0b2dnbGUsIG9wdGlvbnMpO1xufSk7XG5cbi8vIE1ha2UgYXZhaWxhYmxlIGdsb2JhbGx5XG5kZWNsYXJlIGdsb2JhbCB7XG4gICAgaW50ZXJmYWNlIFdpbmRvdyB7XG4gICAgICAgIFF1aWxsOiBRdWlsbDtcbiAgICB9XG59XG5cbndpbmRvdy5RdWlsbCA9IFF1aWxsOyIsIi8vIFZlbmRvclxuaW1wb3J0ICdib290c3RyYXAnO1xuXG4vLyBUaGVtZSAtIEdsb2JhbGx5IGFjY2Vzc2libGVcbmltcG9ydCAnLi9ib290c3RyYXAnO1xuaW1wb3J0ICcuL2F1dG9zaXplJztcbmltcG9ydCAnLi9jaG9pY2VzJztcbmltcG9ydCAnLi9kcm9wem9uZSc7XG5pbXBvcnQgJy4vZmxhdHBpY2tyJztcbmltcG9ydCAnLi9pbnB1dG1hc2snO1xuaW1wb3J0ICcuL2thbmJhbic7XG5pbXBvcnQgJy4vbGlzdCc7XG5pbXBvcnQgJy4vcXVpbGwnO1xuXG4vLyBUaGVtZSAtIE90aGVyXG5pbXBvcnQgJy4vY2hlY2tsaXN0JztcbmltcG9ydCAnLi9tYXAnO1xuaW1wb3J0ICcuL25hdmJhci1jb2xsYXBzZSc7XG5pbXBvcnQgJy4vbmF2YmFyLWRyb3Bkb3duJztcbmltcG9ydCAnLi9wb3BvdmVyJztcbmltcG9ydCAnLi90b29sdGlwJztcbmltcG9ydCAnLi93aXphcmQnOyIsIi8vXG4vLyBwb3BvdmVyLmpzXG4vLyBUaGVtZSBtb2R1bGVcbi8vXG5cbmltcG9ydCB7VG9vbHRpcH0gZnJvbSAnYm9vdHN0cmFwJztcblxuY29uc3QgdG9vbHRpcHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS1icy10b2dnbGU9XCJ0b29sdGlwXCJdJyk7XG5cbnRvb2x0aXBzLmZvckVhY2godG9vbHRpcCA9PiB7XG4gICAgbmV3IFRvb2x0aXAodG9vbHRpcCk7XG59KTsiLCIvL1xuLy8gd2l6YXJkLmpzXG4vLyBEYXNoa2l0IG1vZHVsZVxuLy9cblxuaW1wb3J0IHtUYWJ9IGZyb20gJ2Jvb3RzdHJhcCc7XG5cbmNvbnN0IHRvZ2dsZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS10b2dnbGU9XCJ3aXphcmRcIl0nKTtcblxudG9nZ2xlcy5mb3JFYWNoKHRvZ2dsZSA9PiB7XG4gICAgdG9nZ2xlLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuXG4gICAgICAgIC8vIFRvZ2dsZSBuZXcgdGFiXG4gICAgICAgIGNvbnN0IHRhYiA9IG5ldyBUYWIodG9nZ2xlKTtcblxuICAgICAgICB0YWIuc2hvdygpO1xuXG4gICAgICAgIC8vIFJlbW92ZSBhY3RpdmUgc3RhdGVcbiAgICAgICAgdG9nZ2xlLmNsYXNzTGlzdC5yZW1vdmUoJ2FjdGl2ZScpO1xuICAgIH0pO1xufSk7XG4iLCIvKipcbiAqIFdyaXRlIHlvdXIgb3duIEphdmFTY3JpcHQgaW4gdGhpcyBmaWxlXG4gKi9cblxuaW1wb3J0ICcuL2Rhc2hraXQvdGhlbWUnOyIsIi8vIGV4dHJhY3RlZCBieSBtaW5pLWNzcy1leHRyYWN0LXBsdWdpblxuZXhwb3J0IHt9OyJdLCJuYW1lcyI6WyJyZXF1aXJlIiwidG9nZ2xlcyIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvckFsbCIsImZvckVhY2giLCJ0b2dnbGUiLCJ3aW5kb3ciLCJhdXRvc2l6ZSIsImF1dG9zaXplXzEiLCJBbGVydCIsImJvb3RzdHJhcF8xIiwiQnV0dG9uIiwiQ2Fyb3VzZWwiLCJDb2xsYXBzZSIsIkRyb3Bkb3duIiwiTW9kYWwiLCJPZmZjYW52YXMiLCJQb3BvdmVyIiwiU2Nyb2xsU3B5IiwiVGFiIiwiVG9hc3QiLCJUb29sdGlwIiwiY2hlY2tsaXN0cyIsImRyYWdnYWJsZV8xIiwiZHJhZ2dhYmxlIiwiaGFuZGxlIiwibWlycm9yIiwiY29uc3RyYWluRGltZW5zaW9ucyIsImRlY29kZUh0bWxTcGVjaWFsQ2hhcnMiLCJzdHIiLCJyZXBsYWNlIiwibWF0Y2giLCJkZWMiLCJTdHJpbmciLCJmcm9tQ2hhckNvZGUiLCJpbml0Q2hvaWNlcyIsInRvZ2dsZUVsZW1lbnQiLCJvcHRpb25PdmVycmlkZXMiLCJkZWZhdWx0T3B0aW9ucyIsImFsbG93SFRNTCIsImNsYXNzTmFtZXMiLCJjb250YWluZXJJbm5lciIsImNsYXNzTmFtZSIsImlucHV0IiwiaW5wdXRDbG9uZWQiLCJsaXN0RHJvcGRvd24iLCJpdGVtQ2hvaWNlIiwiYWN0aXZlU3RhdGUiLCJzZWxlY3RlZFN0YXRlIiwic2hvdWxkU29ydCIsImNhbGxiYWNrT25DcmVhdGVUZW1wbGF0ZXMiLCJ0ZW1wbGF0ZSIsImNob2ljZSIsIm9wdGlvbnMiLCJkYXRhIiwiY2xhc3NlcyIsIml0ZW0iLCJkaXNhYmxlZCIsIml0ZW1EaXNhYmxlZCIsIml0ZW1TZWxlY3RhYmxlIiwicm9sZSIsImdyb3VwSWQiLCJzZWxlY3RUZXh0IiwiY29uZmlnIiwiaXRlbVNlbGVjdFRleHQiLCJsYWJlbCIsImN1c3RvbVByb3BlcnRpZXMiLCJhdmF0YXJTcmMiLCJpZCIsInZhbHVlIiwibXVsdGlwbGUiLCJjaG9pY2VzIiwiQ2hvaWNlcyIsImV4cG9ydHMiLCJkYXRhQ2hvaWNlcyIsImdldEF0dHJpYnV0ZSIsImVsZW1lbnRPcHRpb25zIiwiSlNPTiIsInBhcnNlIiwiZHJvcHpvbmVfMSIsImF1dG9EaXNjb3ZlciIsInRodW1ibmFpbFdpZHRoIiwidGh1bWJuYWlsSGVpZ2h0IiwiY3VycmVudEZpbGUiLCJ1bmRlZmluZWQiLCJwcmV2aWV3c0NvbnRhaW5lciIsInF1ZXJ5U2VsZWN0b3IiLCJwcmV2aWV3VGVtcGxhdGUiLCJpbm5lckhUTUwiLCJpbml0Iiwib24iLCJmaWxlIiwibWF4RmlsZXMiLCJyZW1vdmVGaWxlIiwiRHJvcHpvbmUiLCJmbGF0cGlja3IiLCJmbGF0cGlja3JfMSIsInJpZ2h0QWxpZ24iLCJtYXNrIiwiSW5wdXRNYXNrIiwiaW5wdXRtYXNrXzEiLCJjYXRlZ29yaWVzIiwibGlua3MiLCJmb3JtcyIsInRvZ2dsZUl0ZW1zIiwiZWwiLCJwYXJlbnQiLCJjbG9zZXN0IiwiY2FyZCIsImxpbmsiLCJmb3JtIiwiY2xhc3NMaXN0IiwiY29udGFpbnMiLCJyZW1vdmUiLCJhZGQiLCJhZGRFdmVudExpc3RlbmVyIiwiZSIsInByZXZlbnREZWZhdWx0IiwiU29ydGFibGUiLCJsaXN0cyIsInNvcnRzIiwibGlzdCIsImxpc3RBbGVydCIsImxpc3RBbGVydENvdW50IiwibGlzdEFsZXJ0Q2xvc2UiLCJsaXN0Q2hlY2tib3hlcyIsImxpc3RDaGVja2JveEFsbCIsImxpc3RQYWdpbmF0aW9uIiwibGlzdFBhZ2luYXRpb25QcmV2IiwibGlzdFBhZ2luYXRpb25OZXh0IiwibGlzdE9wdGlvbnMiLCJkYXRhc2V0IiwibGlzdENsYXNzIiwic2VhcmNoQ2xhc3MiLCJzb3J0Q2xhc3MiLCJPYmplY3QiLCJhc3NpZ24iLCJsaXN0T2JqIiwibGlzdF9qc18xIiwiY2FsbCIsInBhZ2luYXRpb24iLCJuZXh0SXRlbSIsInBhcnNlSW50IiwiaSIsInBhZ2UiLCJzaXplIiwic2hvdyIsInByZXZJdGVtIiwiY2hlY2tib3giLCJjb3VudENoZWNrYm94ZXMiLCJjaGVja2VkIiwic2xpY2UiLCJmaWx0ZXIiLCJsZW5ndGgiLCJzb3J0IiwiTGlzdCIsIm1hcHMiLCJhY2Nlc3NUb2tlbiIsIm1hcGJveF9nbF8xIiwibWFwIiwiY29udGFpbmVyIiwic3R5bGUiLCJzY3JvbGxab29tIiwiaW50ZXJhY3RpdmUiLCJNYXAiLCJjb2xsYXBzZXMiLCJjb2xsYXBzZUluc3RhbmNlIiwiY29sbGFwc2UiLCJzdG9wUHJvcGFnYXRpb24iLCJjbG9zZXN0Q29sbGFwc2UiLCJwYXJlbnRFbGVtZW50Iiwic2libGluZ0NvbGxhcHNlcyIsInNpYmxpbmdDb2xsYXBzZUluc3RhbmNlIiwiZ2V0SW5zdGFuY2UiLCJzaWJsaW5nQ29sbGFwc2UiLCJoaWRlIiwiY2hpbGRDb2xsYXBzZXMiLCJjaGlsZENvbGxhcHNlSW5zdGFuY2UiLCJjaGlsZENvbGxhcHNlIiwic2VsZWN0b3JzIiwiZHJvcGRvd25zIiwiTkFWQkFSX0JSRUFLUE9JTlQiLCJpbm5lcldpZHRoIiwiZHJvcGRvd24iLCJpbnN0YW5jZSIsInBvcG92ZXJzIiwicG9wb3ZlciIsIm1vZHVsZXMiLCJ0b29sYmFyIiwidGhlbWUiLCJxdWlsbF8xIiwiUXVpbGwiLCJ0b29sdGlwcyIsInRvb2x0aXAiLCJ0YWIiXSwic291cmNlUm9vdCI6IiJ9