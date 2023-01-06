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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,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c3NldHMvYXBwLnRzIiwid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvZGFzaGtpdC9hdXRvc2l6ZS50cyIsIndlYnBhY2s6Ly9MZWFrb2ZUaGVZZWFyLy4vYXNzZXRzL2pzL2Rhc2hraXQvYm9vdHN0cmFwLnRzIiwid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvZGFzaGtpdC9jaGVja2xpc3QudHMiLCJ3ZWJwYWNrOi8vTGVha29mVGhlWWVhci8uL2Fzc2V0cy9qcy9kYXNoa2l0L2Nob2ljZXMudHMiLCJ3ZWJwYWNrOi8vTGVha29mVGhlWWVhci8uL2Fzc2V0cy9qcy9kYXNoa2l0L2Ryb3B6b25lLnRzIiwid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvZGFzaGtpdC9mbGF0cGlja3IudHMiLCJ3ZWJwYWNrOi8vTGVha29mVGhlWWVhci8uL2Fzc2V0cy9qcy9kYXNoa2l0L2lucHV0bWFzay50cyIsIndlYnBhY2s6Ly9MZWFrb2ZUaGVZZWFyLy4vYXNzZXRzL2pzL2Rhc2hraXQva2FuYmFuLnRzIiwid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvZGFzaGtpdC9saXN0LnRzIiwid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvZGFzaGtpdC9tYXAudHMiLCJ3ZWJwYWNrOi8vTGVha29mVGhlWWVhci8uL2Fzc2V0cy9qcy9kYXNoa2l0L25hdmJhci1jb2xsYXBzZS50cyIsIndlYnBhY2s6Ly9MZWFrb2ZUaGVZZWFyLy4vYXNzZXRzL2pzL2Rhc2hraXQvbmF2YmFyLWRyb3Bkb3duLnRzIiwid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvZGFzaGtpdC9wb3BvdmVyLnRzIiwid2VicGFjazovL0xlYWtvZlRoZVllYXIvLi9hc3NldHMvanMvZGFzaGtpdC9xdWlsbC50cyIsIndlYnBhY2s6Ly9MZWFrb2ZUaGVZZWFyLy4vYXNzZXRzL2pzL2Rhc2hraXQvdGhlbWUudHMiLCJ3ZWJwYWNrOi8vTGVha29mVGhlWWVhci8uL2Fzc2V0cy9qcy9kYXNoa2l0L3Rvb2x0aXAudHMiLCJ3ZWJwYWNrOi8vTGVha29mVGhlWWVhci8uL2Fzc2V0cy9qcy9kYXNoa2l0L3dpemFyZC50cyIsIndlYnBhY2s6Ly9MZWFrb2ZUaGVZZWFyLy4vYXNzZXRzL2pzL21haW4udHMiLCJ3ZWJwYWNrOi8vTGVha29mVGhlWWVhci8uL2Fzc2V0cy9zY3NzL21haW4uc2Nzcz8zZjMxIl0sInNvdXJjZXNDb250ZW50IjpbIi8vIEVudHJ5IHBvaW50XG5pbXBvcnQgJy4vanMvbWFpbic7XG5pbXBvcnQgJy4vc2Nzcy9tYWluLnNjc3MnOyIsIi8vXG4vLyBhdXRvc2l6ZS5qc1xuLy8gRGFzaGtpdCBtb2R1bGVcbi8vXG5cbmltcG9ydCBhdXRvc2l6ZSBmcm9tICdhdXRvc2l6ZSc7XG5cbmNvbnN0IHRvZ2dsZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS1hdXRvc2l6ZV0nKTtcblxudG9nZ2xlcy5mb3JFYWNoKCh0b2dnbGUpID0+IHtcbiAgICBhdXRvc2l6ZSh0b2dnbGUpO1xufSk7XG5cbi8vIE1ha2UgYXZhaWxhYmxlIGdsb2JhbGx5XG5kZWNsYXJlIGdsb2JhbCB7XG4gICAgaW50ZXJmYWNlIFdpbmRvdyB7XG4gICAgICAgIGF1dG9zaXplOiBhbnk7XG4gICAgfVxufVxuXG53aW5kb3cuYXV0b3NpemUgPSBhdXRvc2l6ZTtcbiIsImltcG9ydCB7XG4gICAgQWxlcnQsXG4gICAgQnV0dG9uLFxuICAgIENhcm91c2VsLFxuICAgIENvbGxhcHNlLFxuICAgIERyb3Bkb3duLFxuICAgIE1vZGFsLFxuICAgIE9mZmNhbnZhcyxcbiAgICBQb3BvdmVyLFxuICAgIFNjcm9sbFNweSxcbiAgICBUYWIsXG4gICAgVG9hc3QsXG4gICAgVG9vbHRpcCxcbn0gZnJvbSAnYm9vdHN0cmFwJztcblxuLy8gTWFrZSBhdmFpbGFibGUgZ2xvYmFsbHlcbmRlY2xhcmUgZ2xvYmFsIHtcbiAgICBpbnRlcmZhY2UgV2luZG93IHtcbiAgICAgICAgQWxlcnQ6IEFsZXJ0XG4gICAgICAgIEJ1dHRvbjogQnV0dG9uXG4gICAgICAgIENhcm91c2VsOiBDYXJvdXNlbFxuICAgICAgICBDb2xsYXBzZTogQ29sbGFwc2VcbiAgICAgICAgRHJvcGRvd246IERyb3Bkb3duXG4gICAgICAgIE1vZGFsOiBNb2RhbFxuICAgICAgICBPZmZjYW52YXM6IE9mZmNhbnZhc1xuICAgICAgICBQb3BvdmVyOiBQb3BvdmVyXG4gICAgICAgIFNjcm9sbFNweTogU2Nyb2xsU3B5XG4gICAgICAgIFRhYjogVGFiXG4gICAgICAgIFRvYXN0OiBUb2FzdFxuICAgICAgICBUb29sdGlwOiBUb29sdGlwXG4gICAgfVxufVxuXG53aW5kb3cuQWxlcnQgPSBBbGVydDtcbndpbmRvdy5CdXR0b24gPSBCdXR0b247XG53aW5kb3cuQ2Fyb3VzZWwgPSBDYXJvdXNlbDtcbndpbmRvdy5Db2xsYXBzZSA9IENvbGxhcHNlO1xud2luZG93LkRyb3Bkb3duID0gRHJvcGRvd247XG53aW5kb3cuTW9kYWwgPSBNb2RhbDtcbndpbmRvdy5PZmZjYW52YXMgPSBPZmZjYW52YXM7XG53aW5kb3cuUG9wb3ZlciA9IFBvcG92ZXI7XG53aW5kb3cuU2Nyb2xsU3B5ID0gU2Nyb2xsU3B5O1xud2luZG93LlRhYiA9IFRhYjtcbndpbmRvdy5Ub2FzdCA9IFRvYXN0O1xud2luZG93LlRvb2x0aXAgPSBUb29sdGlwO1xuIiwiLy9cbi8vIGNoZWNrbGlzdC5qc1xuLy8gRGFzaGtpdCBtb2R1bGVcbi8vXG5cbmltcG9ydCB7U29ydGFibGV9IGZyb20gJ0BzaG9waWZ5L2RyYWdnYWJsZSc7XG5cbmNvbnN0IGNoZWNrbGlzdHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcuY2hlY2tsaXN0Jyk7XG5cbmlmIChjaGVja2xpc3RzKSB7XG4gICAgbmV3IFNvcnRhYmxlKGNoZWNrbGlzdHMsIHtcbiAgICAgICAgZHJhZ2dhYmxlOiAnLmZvcm0tY2hlY2snLFxuICAgICAgICBoYW5kbGU6ICcuZm9ybS1jaGVjay1sYWJlbCcsXG4gICAgICAgIG1pcnJvcjoge1xuICAgICAgICAgICAgY29uc3RyYWluRGltZW5zaW9uczogdHJ1ZVxuICAgICAgICB9XG4gICAgfSk7XG59IiwiaW1wb3J0ICogYXMgQ2hvaWNlcyBmcm9tIFwiY2hvaWNlcy5qc1wiO1xuXG5jb25zdCB0b2dnbGVzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnW2RhdGEtY2hvaWNlc10nKTtcblxubGV0IGRlY29kZUh0bWxTcGVjaWFsQ2hhcnMgPSAoc3RyKSA9PiB7XG4gICAgc3RyID0gc3RyLnJlcGxhY2UoLyYjKFxcZCspOy9nLCBmdW5jdGlvbihtYXRjaCwgZGVjKSB7XG4gICAgICAgIHJldHVybiBTdHJpbmcuZnJvbUNoYXJDb2RlKGRlYyk7XG4gICAgfSk7XG5cbiAgICBzdHIgPSBzdHIucmVwbGFjZSgvJnF1b3Q7L2csICdcIicpXG4gICAgICAgIC5yZXBsYWNlKC8mYW1wOy9nLCAnJicpXG4gICAgICAgIC5yZXBsYWNlKC8mbHQ7L2csICc8JylcbiAgICAgICAgLnJlcGxhY2UoLyZndDsvZywgJz4nKVxuICAgICAgICAucmVwbGFjZSgvJmFwb3M7L2csIFwiJ1wiKVxuICAgIDtcblxuICAgIHJldHVybiBzdHI7XG59XG5cbi8vIEB0cy1pZ25vcmVcbmV4cG9ydCBmdW5jdGlvbiBpbml0Q2hvaWNlcyh0b2dnbGVFbGVtZW50LCBvcHRpb25PdmVycmlkZXMgPSB7fSk6IENob2ljZXNcbntcbiAgICBsZXQgZGVmYXVsdE9wdGlvbnMgPSB7XG4gICAgICAgIGFsbG93SFRNTDogZmFsc2UsXG4gICAgICAgIGNsYXNzTmFtZXM6IHtcbiAgICAgICAgICAgIGNvbnRhaW5lcklubmVyOiB0b2dnbGVFbGVtZW50LmNsYXNzTmFtZSxcbiAgICAgICAgICAgIGlucHV0OiAnZm9ybS1jb250cm9sJyxcbiAgICAgICAgICAgIGlucHV0Q2xvbmVkOiAnZm9ybS1jb250cm9sLXNtJyxcbiAgICAgICAgICAgIGxpc3REcm9wZG93bjogJ2Ryb3Bkb3duLW1lbnUnLFxuICAgICAgICAgICAgaXRlbUNob2ljZTogJ2Ryb3Bkb3duLWl0ZW0nLFxuICAgICAgICAgICAgYWN0aXZlU3RhdGU6ICdzaG93JyxcbiAgICAgICAgICAgIHNlbGVjdGVkU3RhdGU6ICdhY3RpdmUnLFxuICAgICAgICB9LFxuICAgICAgICBzaG91bGRTb3J0OiBmYWxzZSxcbiAgICAgICAgY2FsbGJhY2tPbkNyZWF0ZVRlbXBsYXRlczogZnVuY3Rpb24gKHRlbXBsYXRlKSB7XG4gICAgICAgICAgICByZXR1cm4ge1xuICAgICAgICAgICAgICAgIGNob2ljZTogKG9wdGlvbnMsIGRhdGEpID0+IHtcbiAgICAgICAgICAgICAgICAgICAgY29uc3QgY2xhc3NOYW1lcyA9IG9wdGlvbnMuY2xhc3NOYW1lcztcblxuICAgICAgICAgICAgICAgICAgICBjb25zdCBjbGFzc2VzID0gYCR7Y2xhc3NOYW1lcy5pdGVtfSAke2NsYXNzTmFtZXMuaXRlbUNob2ljZX0gJHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGRhdGEuZGlzYWJsZWQgPyBjbGFzc05hbWVzLml0ZW1EaXNhYmxlZCA6IGNsYXNzTmFtZXMuaXRlbVNlbGVjdGFibGVcbiAgICAgICAgICAgICAgICAgICAgfWA7XG5cbiAgICAgICAgICAgICAgICAgICAgY29uc3QgZGlzYWJsZWQgPSBkYXRhLmRpc2FibGVkID8gJ2RhdGEtY2hvaWNlLWRpc2FibGVkIGFyaWEtZGlzYWJsZWQ9XCJ0cnVlXCInIDogJ2RhdGEtY2hvaWNlLXNlbGVjdGFibGUnO1xuICAgICAgICAgICAgICAgICAgICBjb25zdCByb2xlID0gZGF0YS5ncm91cElkID4gMCA/ICdyb2xlPVwidHJlZWl0ZW1cIicgOiAncm9sZT1cIm9wdGlvblwiJztcbiAgICAgICAgICAgICAgICAgICAgY29uc3Qgc2VsZWN0VGV4dCA9IHRoaXMuY29uZmlnLml0ZW1TZWxlY3RUZXh0O1xuXG4gICAgICAgICAgICAgICAgICAgIGxldCBsYWJlbCA9ICcnO1xuXG4gICAgICAgICAgICAgICAgICAgIGlmIChkYXRhLmN1c3RvbVByb3BlcnRpZXMgJiYgZGF0YS5jdXN0b21Qcm9wZXJ0aWVzLmF2YXRhclNyYykge1xuICAgICAgICAgICAgICAgICAgICAgICAgbGFiZWwgPSBgPGRpdiBjbGFzcz1cImF2YXRhciBhdmF0YXIteHMgbWUtM1wiPmBcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICArIGAgICAgPGltZyBjbGFzcz1cImF2YXRhci1pbWcgcm91bmRlZC1jaXJjbGVcIiBzcmM9XCIke2RhdGEuY3VzdG9tUHJvcGVydGllcy5hdmF0YXJTcmN9XCIgYWx0PVwiJHtkYXRhLmxhYmVsfVwiID5gXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgKyBgPC9kaXY+IGA7XG4gICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICBsYWJlbCArPSBkYXRhLmxhYmVsO1xuXG4gICAgICAgICAgICAgICAgICAgIHJldHVybiB0ZW1wbGF0ZShgPGRpdiBjbGFzcz1cIiR7Y2xhc3Nlc31cIiBkYXRhLXNlbGVjdC10ZXh0PVwiJHtzZWxlY3RUZXh0fVwiIGRhdGEtY2hvaWNlICR7ZGlzYWJsZWR9IGRhdGEtaWQ9XCIke2RhdGEuaWR9XCIgZGF0YS12YWx1ZT1cIiR7ZGF0YS52YWx1ZX1cIiAke3JvbGV9PiR7bGFiZWx9PC9kaXY+YCk7XG4gICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgIH07XG4gICAgICAgIH0sXG4gICAgfTtcblxuICAgIGlmICh0b2dnbGVFbGVtZW50Lm11bHRpcGxlKSB7XG4gICAgICAgIGRlZmF1bHRPcHRpb25zWydyZW1vdmVJdGVtQnV0dG9uJ10gPSB0cnVlO1xuICAgIH1cblxuICAgIGNvbnN0IG9wdGlvbnMgPSB7XG4gICAgICAgIC4uLm9wdGlvbk92ZXJyaWRlcyxcbiAgICAgICAgLi4uZGVmYXVsdE9wdGlvbnMsXG4gICAgfTtcblxuICAgIC8vIEB0cy1pZ25vcmVcbiAgICByZXR1cm4gdG9nZ2xlRWxlbWVudC5jaG9pY2VzID0gbmV3IENob2ljZXModG9nZ2xlRWxlbWVudCwgb3B0aW9ucyk7XG59XG5cbnRvZ2dsZXMuZm9yRWFjaCgodG9nZ2xlOiBIVE1MU2VsZWN0RWxlbWVudHxIVE1MSW5wdXRFbGVtZW50KSA9PiB7XG4gICAgLy8gRGVjb2RlIGZyb20gUEhQJ3MgaHRtbHNwZWNpYWxjaGFyc1xuICAgIGxldCBkYXRhQ2hvaWNlcyA9IHRvZ2dsZS5nZXRBdHRyaWJ1dGUoXCJkYXRhLWNob2ljZXNcIik7XG5cbiAgICBpZiAoZGF0YUNob2ljZXMpIHtcbiAgICAgICAgZGF0YUNob2ljZXMgPSBkZWNvZGVIdG1sU3BlY2lhbENoYXJzKGRhdGFDaG9pY2VzKTtcbiAgICB9XG5cbiAgICBjb25zdCBlbGVtZW50T3B0aW9ucyA9IGRhdGFDaG9pY2VzID8gSlNPTi5wYXJzZShkYXRhQ2hvaWNlcykgOiB7fTtcblxuICAgIGluaXRDaG9pY2VzKHRvZ2dsZSwgZWxlbWVudE9wdGlvbnMpO1xufSk7XG5cbi8vIE1ha2UgYXZhaWxhYmxlIGdsb2JhbGx5XG4oPGFueT53aW5kb3cpLkNob2ljZXMgPSBDaG9pY2VzOyIsIi8vXG4vLyBkcm9wem9uZS5qc1xuLy8gVGhlbWUgbW9kdWxlXG4vL1xuXG5pbXBvcnQgRHJvcHpvbmUgZnJvbSAnZHJvcHpvbmUnO1xuXG5Ecm9wem9uZS5hdXRvRGlzY292ZXIgPSBmYWxzZTtcbkRyb3B6b25lLnRodW1ibmFpbFdpZHRoID0gbnVsbDtcbkRyb3B6b25lLnRodW1ibmFpbEhlaWdodCA9IG51bGw7XG5cbmNvbnN0IHRvZ2dsZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS1kcm9wem9uZV0nKTtcblxudG9nZ2xlcy5mb3JFYWNoKCh0b2dnbGUpID0+IHtcbiAgICBsZXQgY3VycmVudEZpbGUgPSB1bmRlZmluZWQ7XG5cbiAgICBjb25zdCBlbGVtZW50T3B0aW9ucyA9IHRvZ2dsZS5nZXRBdHRyaWJ1dGUoXCJkYXRhLWRyb3B6b25lXCIpID8gSlNPTi5wYXJzZSh0b2dnbGUuZ2V0QXR0cmlidXRlKFwiZGF0YS1kcm9wem9uZVwiKSkgOiB7fTtcblxuICAgIGNvbnN0IGRlZmF1bHRPcHRpb25zID0ge1xuICAgICAgICBwcmV2aWV3c0NvbnRhaW5lcjogdG9nZ2xlLnF1ZXJ5U2VsZWN0b3IoJy5kei1wcmV2aWV3JyksXG4gICAgICAgIHByZXZpZXdUZW1wbGF0ZTogdG9nZ2xlLnF1ZXJ5U2VsZWN0b3IoJy5kei1wcmV2aWV3JykuaW5uZXJIVE1MLFxuICAgICAgICBpbml0OiBmdW5jdGlvbiAoKSB7XG4gICAgICAgICAgICB0aGlzLm9uKCdhZGRlZGZpbGUnLCBmdW5jdGlvbiAoZmlsZSkge1xuICAgICAgICAgICAgICAgIGNvbnN0IG1heEZpbGVzID0gZWxlbWVudE9wdGlvbnMubWF4RmlsZXM7XG5cbiAgICAgICAgICAgICAgICBpZiAobWF4RmlsZXMgPT0gMSAmJiBjdXJyZW50RmlsZSkge1xuICAgICAgICAgICAgICAgICAgICB0aGlzLnJlbW92ZUZpbGUoY3VycmVudEZpbGUpO1xuICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgIGN1cnJlbnRGaWxlID0gZmlsZTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9LFxuICAgIH07XG5cbiAgICBjb25zdCBvcHRpb25zID0ge1xuICAgICAgICAuLi5lbGVtZW50T3B0aW9ucyxcbiAgICAgICAgLi4uZGVmYXVsdE9wdGlvbnMsXG4gICAgfTtcblxuICAgIC8vIENsZWFyIHByZXZpZXdcbiAgICB0b2dnbGUucXVlcnlTZWxlY3RvcignLmR6LXByZXZpZXcnKS5pbm5lckhUTUwgPSAnJztcblxuICAgIC8vIEluaXQgZHJvcHpvbmVcbiAgICBuZXcgRHJvcHpvbmUodG9nZ2xlLCBvcHRpb25zKTtcbn0pO1xuXG4vLyBNYWtlIGF2YWlsYWJsZSBnbG9iYWxseVxuZGVjbGFyZSBnbG9iYWwge1xuICAgIGludGVyZmFjZSBXaW5kb3cge1xuICAgICAgICBEcm9wem9uZTogRHJvcHpvbmU7XG4gICAgfVxufVxuXG53aW5kb3cuRHJvcHpvbmUgPSBEcm9wem9uZTsiLCIvL1xuLy8gZmxhdHBpY2tyLmpzXG4vLyBUaGVtZSBtb2R1bGVcbi8vXG5cbmltcG9ydCBmbGF0cGlja3IgZnJvbSAnZmxhdHBpY2tyJztcblxuY29uc3QgdG9nZ2xlcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ1tkYXRhLWZsYXRwaWNrcl0nKTtcblxudG9nZ2xlcy5mb3JFYWNoKCh0b2dnbGUpID0+IHtcbiAgICBjb25zdCBvcHRpb25zID0gdG9nZ2xlLmdldEF0dHJpYnV0ZShcImRhdGEtZmxhdHBpY2tyXCIpID8gSlNPTi5wYXJzZSh0b2dnbGUuZ2V0QXR0cmlidXRlKFwiZGF0YS1mbGF0cGlja3JcIikpIDoge307XG5cbiAgICBmbGF0cGlja3IodG9nZ2xlLCBvcHRpb25zKTtcbn0pO1xuXG4vLyBNYWtlIGF2YWlsYWJsZSBnbG9iYWxseVxuZGVjbGFyZSBnbG9iYWwge1xuICAgIGludGVyZmFjZSBXaW5kb3cge1xuICAgICAgICBmbGF0cGlja3I6IGFueTtcbiAgICB9XG59XG5cbndpbmRvdy5mbGF0cGlja3IgPSBmbGF0cGlja3I7IiwiLy9cbi8vIGlucHV0bWFzay5qc1xuLy8gVGhlbWUgbW9kdWxlXG4vL1xuXG5pbXBvcnQgSW5wdXRtYXNrIGZyb20gJ2lucHV0bWFzayc7XG5cbmNvbnN0IHRvZ2dsZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS1pbnB1dG1hc2tdJyk7XG5cbmNvbnN0IG9wdGlvbnMgPSB7XG4gICAgcmlnaHRBbGlnbjogZmFsc2UsXG59O1xuXG5JbnB1dG1hc2sob3B0aW9ucykubWFzayh0b2dnbGVzKTtcblxuLy8gTWFrZSBhdmFpbGFibGUgZ2xvYmFsbHlcbmRlY2xhcmUgZ2xvYmFsIHtcbiAgICBpbnRlcmZhY2UgV2luZG93IHtcbiAgICAgICAgSW5wdXRNYXNrOiBJbnB1dG1hc2s7XG4gICAgfVxufVxuXG53aW5kb3cuSW5wdXRNYXNrID0gSW5wdXRtYXNrO1xuIiwiLy9cbi8vIGthbmJhbi5qc1xuLy8gRGFzaGtpdCBtb2R1bGVcbi8vXG5cbmltcG9ydCB7U29ydGFibGV9IGZyb20gJ0BzaG9waWZ5L2RyYWdnYWJsZSc7XG5cbmNvbnN0IGNhdGVnb3JpZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcua2FuYmFuLWNhdGVnb3J5Jyk7XG5jb25zdCBsaW5rcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5rYW5iYW4tYWRkLWxpbmsnKTtcbmNvbnN0IGZvcm1zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLmthbmJhbi1hZGQtZm9ybScpO1xuXG5mdW5jdGlvbiB0b2dnbGVJdGVtcyhlbCkge1xuICAgIGNvbnN0IHBhcmVudCA9IGVsLmNsb3Nlc3QoJy5rYW5iYW4tYWRkJyk7XG4gICAgY29uc3QgY2FyZCA9IHBhcmVudC5xdWVyeVNlbGVjdG9yKCcuY2FyZCcpO1xuICAgIGNvbnN0IGxpbmsgPSBwYXJlbnQucXVlcnlTZWxlY3RvcignLmthbmJhbi1hZGQtbGluaycpO1xuICAgIGNvbnN0IGZvcm0gPSBwYXJlbnQucXVlcnlTZWxlY3RvcignLmthbmJhbi1hZGQtZm9ybScpO1xuXG4gICAgbGluay5jbGFzc0xpc3QudG9nZ2xlKCdkLW5vbmUnKTtcbiAgICBmb3JtLmNsYXNzTGlzdC50b2dnbGUoJ2Qtbm9uZScpO1xuXG4gICAgaWYgKGNhcmQgJiYgY2FyZC5jbGFzc0xpc3QuY29udGFpbnMoJ2NhcmQtc20nKSkge1xuICAgICAgICBpZiAoY2FyZC5jbGFzc0xpc3QuY29udGFpbnMoJ2NhcmQtZmx1c2gnKSkge1xuICAgICAgICAgICAgY2FyZC5jbGFzc0xpc3QucmVtb3ZlKCdjYXJkLWZsdXNoJyk7XG4gICAgICAgIH0gZWxzZSB7XG4gICAgICAgICAgICBjYXJkLmNsYXNzTGlzdC5hZGQoJ2NhcmQtZmx1c2gnKTtcbiAgICAgICAgfVxuICAgIH1cbn1cblxuaWYgKGNhdGVnb3JpZXMpIHtcbiAgICBuZXcgU29ydGFibGUoY2F0ZWdvcmllcywge1xuICAgICAgICBkcmFnZ2FibGU6ICcua2FuYmFuLWl0ZW0nLFxuICAgICAgICBtaXJyb3I6IHtcbiAgICAgICAgICAgIGNvbnN0cmFpbkRpbWVuc2lvbnM6IHRydWUsXG4gICAgICAgIH0sXG4gICAgfSk7XG59XG5cbmxpbmtzLmZvckVhY2goKGxpbmspID0+IHtcbiAgICBsaW5rLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4ge1xuICAgICAgICB0b2dnbGVJdGVtcyhsaW5rKTtcbiAgICB9KTtcbn0pO1xuXG5mb3Jtcy5mb3JFYWNoKChmb3JtKSA9PiB7XG4gICAgZm9ybS5hZGRFdmVudExpc3RlbmVyKCdyZXNldCcsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgdG9nZ2xlSXRlbXMoZm9ybSk7XG4gICAgfSk7XG5cbiAgICBmb3JtLmFkZEV2ZW50TGlzdGVuZXIoJ3N1Ym1pdCcsIGZ1bmN0aW9uIChlKSB7XG4gICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICB9KTtcbn0pO1xuXG4vLyBNYWtlIGF2YWlsYWJsZSBnbG9iYWxseVxuZGVjbGFyZSBnbG9iYWwge1xuICAgIGludGVyZmFjZSBXaW5kb3cge1xuICAgICAgICBTb3J0YWJsZTogU29ydGFibGU7XG4gICAgfVxufVxuXG53aW5kb3cuU29ydGFibGUgPSBTb3J0YWJsZTsiLCIvL1xuLy8gbGlzdC5qc1xuLy8gVGhlbWUgbW9kdWxlXG4vL1xuXG5pbXBvcnQgTGlzdCBmcm9tICdsaXN0LmpzJztcblxuZXhwb3J0IGRlZmF1bHQgKGZ1bmN0aW9uICgpIHtcbiAgICBjb25zdCBsaXN0cyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ1tkYXRhLWxpc3RdJyk7XG4gICAgY29uc3Qgc29ydHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS1zb3J0XScpO1xuXG4gICAgZnVuY3Rpb24gaW5pdChsaXN0KSB7XG4gICAgICAgIGNvbnN0IGxpc3RBbGVydCA9IGxpc3QucXVlcnlTZWxlY3RvcignLmxpc3QtYWxlcnQnKTtcbiAgICAgICAgY29uc3QgbGlzdEFsZXJ0Q291bnQgPSBsaXN0LnF1ZXJ5U2VsZWN0b3IoJy5saXN0LWFsZXJ0LWNvdW50Jyk7XG4gICAgICAgIGNvbnN0IGxpc3RBbGVydENsb3NlID0gbGlzdC5xdWVyeVNlbGVjdG9yKCcubGlzdC1hbGVydCAuYnRuLWNsb3NlJyk7XG4gICAgICAgIGNvbnN0IGxpc3RDaGVja2JveGVzID0gbGlzdC5xdWVyeVNlbGVjdG9yQWxsKCcubGlzdC1jaGVja2JveCcpO1xuICAgICAgICBjb25zdCBsaXN0Q2hlY2tib3hBbGwgPSBsaXN0LnF1ZXJ5U2VsZWN0b3IoJy5saXN0LWNoZWNrYm94LWFsbCcpO1xuICAgICAgICBjb25zdCBsaXN0UGFnaW5hdGlvbiA9IGxpc3QucXVlcnlTZWxlY3RvckFsbCgnLmxpc3QtcGFnaW5hdGlvbicpO1xuICAgICAgICBjb25zdCBsaXN0UGFnaW5hdGlvblByZXYgPSBsaXN0LnF1ZXJ5U2VsZWN0b3IoJy5saXN0LXBhZ2luYXRpb24tcHJldicpO1xuICAgICAgICBjb25zdCBsaXN0UGFnaW5hdGlvbk5leHQgPSBsaXN0LnF1ZXJ5U2VsZWN0b3IoJy5saXN0LXBhZ2luYXRpb24tbmV4dCcpO1xuICAgICAgICBjb25zdCBsaXN0T3B0aW9ucyA9IGxpc3QuZGF0YXNldC5saXN0ICYmIEpTT04ucGFyc2UobGlzdC5kYXRhc2V0Lmxpc3QpO1xuXG4gICAgICAgIGNvbnN0IGRlZmF1bHRPcHRpb25zID0ge1xuICAgICAgICAgICAgbGlzdENsYXNzOiAnbGlzdCcsXG4gICAgICAgICAgICBzZWFyY2hDbGFzczogJ2xpc3Qtc2VhcmNoJyxcbiAgICAgICAgICAgIHNvcnRDbGFzczogJ2xpc3Qtc29ydCcsXG4gICAgICAgIH07XG5cbiAgICAgICAgLy8gTWVyZ2Ugb3B0aW9uc1xuICAgICAgICBjb25zdCBvcHRpb25zID0gT2JqZWN0LmFzc2lnbihkZWZhdWx0T3B0aW9ucywgbGlzdE9wdGlvbnMpO1xuXG4gICAgICAgIC8vIEluaXRcbiAgICAgICAgY29uc3QgbGlzdE9iaiA9IG5ldyBMaXN0KGxpc3QsIG9wdGlvbnMpO1xuXG4gICAgICAgIC8vIFBhZ2luYXRpb25cbiAgICAgICAgaWYgKGxpc3RQYWdpbmF0aW9uKSB7XG4gICAgICAgICAgICBbXS5mb3JFYWNoLmNhbGwobGlzdFBhZ2luYXRpb24sIGZ1bmN0aW9uIChwYWdpbmF0aW9uKSB7XG4gICAgICAgICAgICAgICAgcGFnaW5hdGlvbi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XG4gICAgICAgICAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG5cbiAgICAgICAgLy8gUGFnaW5hdGlvbiAobmV4dClcbiAgICAgICAgaWYgKGxpc3RQYWdpbmF0aW9uTmV4dCkge1xuICAgICAgICAgICAgbGlzdFBhZ2luYXRpb25OZXh0LmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICAgICAgICAgICAgICBjb25zdCBuZXh0SXRlbSA9IHBhcnNlSW50KGxpc3RPYmouaSkgKyBwYXJzZUludChsaXN0T2JqLnBhZ2UpO1xuXG4gICAgICAgICAgICAgICAgaWYgKG5leHRJdGVtIDw9IGxpc3RPYmouc2l6ZSgpKSB7XG4gICAgICAgICAgICAgICAgICAgIGxpc3RPYmouc2hvdyhuZXh0SXRlbSwgbGlzdE9iai5wYWdlKTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfVxuXG4gICAgICAgIC8vIFBhZ2luYXRpb24gKHByZXYpXG4gICAgICAgIGlmIChsaXN0UGFnaW5hdGlvblByZXYpIHtcbiAgICAgICAgICAgIGxpc3RQYWdpbmF0aW9uUHJldi5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsIGZ1bmN0aW9uIChlKSB7XG4gICAgICAgICAgICAgICAgZS5wcmV2ZW50RGVmYXVsdCgpO1xuXG4gICAgICAgICAgICAgICAgY29uc3QgcHJldkl0ZW0gPSBwYXJzZUludChsaXN0T2JqLmkpIC0gcGFyc2VJbnQobGlzdE9iai5wYWdlKTtcblxuICAgICAgICAgICAgICAgIGlmIChwcmV2SXRlbSA+IDApIHtcbiAgICAgICAgICAgICAgICAgICAgbGlzdE9iai5zaG93KHByZXZJdGVtLCBsaXN0T2JqLnBhZ2UpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG5cbiAgICAgICAgLy8gQ2hlY2tib3hlc1xuICAgICAgICBpZiAobGlzdENoZWNrYm94ZXMpIHtcbiAgICAgICAgICAgIFtdLmZvckVhY2guY2FsbChsaXN0Q2hlY2tib3hlcywgZnVuY3Rpb24gKGNoZWNrYm94KSB7XG4gICAgICAgICAgICAgICAgY2hlY2tib3guYWRkRXZlbnRMaXN0ZW5lcignY2hhbmdlJywgZnVuY3Rpb24gKCkge1xuICAgICAgICAgICAgICAgICAgICBjb3VudENoZWNrYm94ZXMobGlzdENoZWNrYm94ZXMsIGxpc3RBbGVydCwgbGlzdEFsZXJ0Q291bnQpO1xuXG4gICAgICAgICAgICAgICAgICAgIGlmIChsaXN0Q2hlY2tib3hBbGwpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGxpc3RDaGVja2JveEFsbC5jaGVja2VkID0gZmFsc2U7XG4gICAgICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG5cbiAgICAgICAgLy8gQ2hlY2tib3hcbiAgICAgICAgaWYgKGxpc3RDaGVja2JveEFsbCkge1xuICAgICAgICAgICAgbGlzdENoZWNrYm94QWxsLmFkZEV2ZW50TGlzdGVuZXIoJ2NoYW5nZScsIGZ1bmN0aW9uICgpIHtcbiAgICAgICAgICAgICAgICBbXS5mb3JFYWNoLmNhbGwobGlzdENoZWNrYm94ZXMsIGZ1bmN0aW9uIChjaGVja2JveCkge1xuICAgICAgICAgICAgICAgICAgICBjaGVja2JveC5jaGVja2VkID0gbGlzdENoZWNrYm94QWxsLmNoZWNrZWQ7XG4gICAgICAgICAgICAgICAgfSk7XG5cbiAgICAgICAgICAgICAgICBjb3VudENoZWNrYm94ZXMobGlzdENoZWNrYm94ZXMsIGxpc3RBbGVydCwgbGlzdEFsZXJ0Q291bnQpO1xuICAgICAgICAgICAgfSk7XG4gICAgICAgIH1cblxuICAgICAgICAvLyBBbGVydFxuICAgICAgICBpZiAobGlzdEFsZXJ0Q2xvc2UpIHtcbiAgICAgICAgICAgIGxpc3RBbGVydENsb3NlLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgZnVuY3Rpb24gKGUpIHtcbiAgICAgICAgICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICAgICAgICAgICAgICBpZiAobGlzdENoZWNrYm94QWxsKSB7XG4gICAgICAgICAgICAgICAgICAgIGxpc3RDaGVja2JveEFsbC5jaGVja2VkID0gZmFsc2U7XG4gICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgW10uZm9yRWFjaC5jYWxsKGxpc3RDaGVja2JveGVzLCBmdW5jdGlvbiAoY2hlY2tib3gpIHtcbiAgICAgICAgICAgICAgICAgICAgY2hlY2tib3guY2hlY2tlZCA9IGZhbHNlO1xuICAgICAgICAgICAgICAgIH0pO1xuXG4gICAgICAgICAgICAgICAgY291bnRDaGVja2JveGVzKGxpc3RDaGVja2JveGVzLCBsaXN0QWxlcnQsIGxpc3RBbGVydENvdW50KTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgZnVuY3Rpb24gY291bnRDaGVja2JveGVzKGxpc3RDaGVja2JveGVzLCBsaXN0QWxlcnQsIGxpc3RBbGVydENvdW50KSB7XG4gICAgICAgIGNvbnN0IGNoZWNrZWQgPSBbXS5zbGljZS5jYWxsKGxpc3RDaGVja2JveGVzKS5maWx0ZXIoZnVuY3Rpb24gKGNoZWNrYm94KSB7XG4gICAgICAgICAgICByZXR1cm4gY2hlY2tib3guY2hlY2tlZDtcbiAgICAgICAgfSk7XG5cbiAgICAgICAgaWYgKGxpc3RBbGVydCkge1xuICAgICAgICAgICAgY2hlY2tlZC5sZW5ndGggPyBsaXN0QWxlcnQuY2xhc3NMaXN0LmFkZCgnc2hvdycpIDogbGlzdEFsZXJ0LmNsYXNzTGlzdC5yZW1vdmUoJ3Nob3cnKTtcbiAgICAgICAgICAgIGxpc3RBbGVydENvdW50LmlubmVySFRNTCA9IGNoZWNrZWQubGVuZ3RoO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgaWYgKHR5cGVvZiBMaXN0ICE9PSAndW5kZWZpbmVkJyAmJiBsaXN0cykge1xuICAgICAgICBbXS5mb3JFYWNoLmNhbGwobGlzdHMsIGZ1bmN0aW9uIChsaXN0KSB7XG4gICAgICAgICAgICBpbml0KGxpc3QpO1xuICAgICAgICB9KTtcbiAgICB9XG5cbiAgICBpZiAodHlwZW9mIExpc3QgIT09ICd1bmRlZmluZWQnICYmIHNvcnRzKSB7XG4gICAgICAgIFtdLmZvckVhY2guY2FsbChzb3J0cywgZnVuY3Rpb24gKHNvcnQpIHtcbiAgICAgICAgICAgIHNvcnQuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xuICAgICAgICAgICAgICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9KTtcbiAgICB9XG59KSgpO1xuXG4vLyBNYWtlIGF2YWlsYWJsZSBnbG9iYWxseVxuZGVjbGFyZSBnbG9iYWwge1xuICAgIGludGVyZmFjZSBXaW5kb3cge1xuICAgICAgICBMaXN0OiBMaXN0O1xuICAgIH1cbn1cblxud2luZG93Lkxpc3QgPSBMaXN0OyIsIi8vXG4vLyBtYXAuanNcbi8vIFRoZW1lIG1vZHVsZVxuLy9cblxuaW1wb3J0IHsgbWFwYm94Z2wgfSBmcm9tICdtYXBib3gtZ2wnO1xuXG5jb25zdCBtYXBzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnW2RhdGEtbWFwXScpO1xuY29uc3QgYWNjZXNzVG9rZW4gPSAncGsuZXlKMUlqb2laMjl2WkhSb1pXMWxjeUlzSW1FaU9pSmphblU1ZUhSNE4yY3liRFU1TkdWd09IWndOR3ByYjNFMEluMC5tc2R3OXExNmRoOHY0YXpKWFVkaVhnJztcblxuaWYgKHR5cGVvZiBtYXBib3hnbCAhPT0gJ3VuZGVmaW5lZCcpIHtcbiAgICBtYXBzLmZvckVhY2gobWFwID0+IHtcbiAgICAgICAgY29uc3QgZWxlbWVudE9wdGlvbnMgPSBtYXAuZ2V0QXR0cmlidXRlKFwiZGF0YS1tYXBcIikgPyBKU09OLnBhcnNlKG1hcC5nZXRBdHRyaWJ1dGUoXCJkYXRhLW1hcFwiKSkgOiB7fTtcblxuICAgICAgICBjb25zdCBkZWZhdWx0T3B0aW9ucyA9IHtcbiAgICAgICAgICAgIGNvbnRhaW5lcjogbWFwLFxuICAgICAgICAgICAgc3R5bGU6ICdtYXBib3g6Ly9zdHlsZXMvbWFwYm94L2xpZ2h0LXY5JyxcbiAgICAgICAgICAgIHNjcm9sbFpvb206IGZhbHNlLFxuICAgICAgICAgICAgaW50ZXJhY3RpdmU6IGZhbHNlXG4gICAgICAgIH1cblxuICAgICAgICBjb25zdCBvcHRpb25zID0ge1xuICAgICAgICAgICAgLi4uZWxlbWVudE9wdGlvbnMsXG4gICAgICAgICAgICAuLi5kZWZhdWx0T3B0aW9uc1xuICAgICAgICB9O1xuXG4gICAgICAgIC8vIEdldCBhY2Nlc3MgdG9rZW5cbiAgICAgICAgbWFwYm94Z2wuYWNjZXNzVG9rZW4gPSBhY2Nlc3NUb2tlbjtcblxuICAgICAgICAvLyBJbml0IG1hcFxuICAgICAgICBuZXcgbWFwYm94Z2wuTWFwKG9wdGlvbnMpO1xuICAgIH0pXG59XG4iLCIvL1xuLy8gbmF2YmFyLmpzXG4vLyBUaGVtZSBtb2R1bGVcbi8vXG5cbmltcG9ydCB7Q29sbGFwc2V9IGZyb20gJ2Jvb3RzdHJhcCc7XG5cbmNvbnN0IGNvbGxhcHNlcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5uYXZiYXItbmF2IC5jb2xsYXBzZScpO1xuXG5jb2xsYXBzZXMuZm9yRWFjaChjb2xsYXBzZSA9PiB7XG4gICAgLy8gSW5pdCBjb2xsYXBzZXNcbiAgICBjb25zdCBjb2xsYXBzZUluc3RhbmNlID0gbmV3IENvbGxhcHNlKGNvbGxhcHNlLCB7XG4gICAgICAgIHRvZ2dsZTogZmFsc2VcbiAgICB9KTtcblxuICAgIC8vIEhpZGUgc2libGluZyBjb2xsYXBzZXMgb24gYHNob3cuYnMuY29sbGFwc2VgXG4gICAgY29sbGFwc2UuYWRkRXZlbnRMaXN0ZW5lcignc2hvdy5icy5jb2xsYXBzZScsIChlKSA9PiB7XG4gICAgICAgIGUuc3RvcFByb3BhZ2F0aW9uKCk7XG5cbiAgICAgICAgY29uc3QgY2xvc2VzdENvbGxhcHNlID0gY29sbGFwc2UucGFyZW50RWxlbWVudC5jbG9zZXN0KCcuY29sbGFwc2UnKTtcbiAgICAgICAgY29uc3Qgc2libGluZ0NvbGxhcHNlcyA9IGNsb3Nlc3RDb2xsYXBzZS5xdWVyeVNlbGVjdG9yQWxsKCcuY29sbGFwc2UnKTtcblxuICAgICAgICBzaWJsaW5nQ29sbGFwc2VzLmZvckVhY2goc2libGluZ0NvbGxhcHNlID0+IHtcbiAgICAgICAgICAgIGNvbnN0IHNpYmxpbmdDb2xsYXBzZUluc3RhbmNlID0gQ29sbGFwc2UuZ2V0SW5zdGFuY2Uoc2libGluZ0NvbGxhcHNlKTtcblxuICAgICAgICAgICAgaWYgKHNpYmxpbmdDb2xsYXBzZUluc3RhbmNlID09PSBjb2xsYXBzZUluc3RhbmNlKSB7XG4gICAgICAgICAgICAgICAgcmV0dXJuO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICBzaWJsaW5nQ29sbGFwc2VJbnN0YW5jZS5oaWRlKCk7XG4gICAgICAgIH0pO1xuICAgIH0pO1xuXG4gICAgLy8gSGlkZSBuZXN0ZWQgY29sbGFwc2VzIG9uIGBoaWRlLmJzLmNvbGxhcHNlYFxuICAgIGNvbGxhcHNlLmFkZEV2ZW50TGlzdGVuZXIoJ2hpZGUuYnMuY29sbGFwc2UnLCAoZSkgPT4ge1xuICAgICAgICBlLnN0b3BQcm9wYWdhdGlvbigpO1xuXG4gICAgICAgIGNvbnN0IGNoaWxkQ29sbGFwc2VzID0gY29sbGFwc2UucXVlcnlTZWxlY3RvckFsbCgnLmNvbGxhcHNlJyk7XG5cbiAgICAgICAgY2hpbGRDb2xsYXBzZXMuZm9yRWFjaChjaGlsZENvbGxhcHNlID0+IHtcbiAgICAgICAgICAgIGNvbnN0IGNoaWxkQ29sbGFwc2VJbnN0YW5jZSA9IENvbGxhcHNlLmdldEluc3RhbmNlKGNoaWxkQ29sbGFwc2UpO1xuXG4gICAgICAgICAgICBjaGlsZENvbGxhcHNlSW5zdGFuY2UuaGlkZSgpO1xuICAgICAgICB9KTtcbiAgICB9KTtcbn0pOyIsIi8vXG4vLyBuYXZiYXItZHJvcGRvd24uanNcbi8vXG5cbmltcG9ydCB7RHJvcGRvd259IGZyb20gJ2Jvb3RzdHJhcCc7XG5cbmNvbnN0IHNlbGVjdG9ycyA9ICcubmF2YmFyIC5kcm9wdXAsIC5uYXZiYXIgLmRyb3BlbmQsIC5uYXZiYXIgLmRyb3Bkb3duLCAubmF2YmFyIC5kcm9wc3RhcnQnO1xuY29uc3QgZHJvcGRvd25zID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbChzZWxlY3RvcnMpO1xuY29uc3QgTkFWQkFSX0JSRUFLUE9JTlQgPSA3Njc7XG5cbmlmICh3aW5kb3cuaW5uZXJXaWR0aCA+IE5BVkJBUl9CUkVBS1BPSU5UKSB7XG4gICAgZHJvcGRvd25zLmZvckVhY2goKGRyb3Bkb3duKSA9PiB7XG4gICAgICAgIGNvbnN0IHRvZ2dsZSA9IGRyb3Bkb3duLnF1ZXJ5U2VsZWN0b3IoJ1tkYXRhLWJzLXRvZ2dsZT1cImRyb3Bkb3duXCJdJyk7XG4gICAgICAgIGNvbnN0IGluc3RhbmNlID0gbmV3IERyb3Bkb3duKHRvZ2dsZSk7XG5cbiAgICAgICAgZHJvcGRvd24uYWRkRXZlbnRMaXN0ZW5lcignbW91c2VlbnRlcicsICgpID0+IHtcbiAgICAgICAgICAgIGluc3RhbmNlLnNob3coKTtcbiAgICAgICAgfSk7XG5cbiAgICAgICAgZHJvcGRvd24uYWRkRXZlbnRMaXN0ZW5lcignbW91c2VsZWF2ZScsICgpID0+IHtcbiAgICAgICAgICAgIGluc3RhbmNlLmhpZGUoKTtcbiAgICAgICAgfSk7XG4gICAgfSk7XG59XG4iLCIvL1xuLy8gcG9wb3Zlci5qc1xuLy8gVGhlbWUgbW9kdWxlXG4vL1xuXG5pbXBvcnQge1BvcG92ZXJ9IGZyb20gJ2Jvb3RzdHJhcCc7XG5cbmNvbnN0IHBvcG92ZXJzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnW2RhdGEtYnMtdG9nZ2xlPVwicG9wb3ZlclwiXScpO1xuXG5wb3BvdmVycy5mb3JFYWNoKHBvcG92ZXIgPT4ge1xuICAgIG5ldyBQb3BvdmVyKHBvcG92ZXIpO1xufSk7IiwiLy9cbi8vIHF1aWxsLmpzXG4vLyBUaGVtZSBtb2R1bGVcbi8vXG5cbmltcG9ydCBRdWlsbCBmcm9tICdxdWlsbCc7XG5cbmNvbnN0IHRvZ2dsZXMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdbZGF0YS1xdWlsbF0nKTtcblxudG9nZ2xlcy5mb3JFYWNoKCh0b2dnbGUpID0+IHtcbiAgICBjb25zdCBlbGVtZW50T3B0aW9ucyA9IHRvZ2dsZS5nZXRBdHRyaWJ1dGUoXCJkYXRhLXF1aWxsXCIpID8gSlNPTi5wYXJzZSh0b2dnbGUuZ2V0QXR0cmlidXRlKFwiZGF0YS1xdWlsbFwiKSkgOiB7fTtcblxuICAgIGNvbnN0IGRlZmF1bHRPcHRpb25zID0ge1xuICAgICAgICBtb2R1bGVzOiB7XG4gICAgICAgICAgICB0b29sYmFyOiBbXG4gICAgICAgICAgICAgICAgWydib2xkJywgJ2l0YWxpYyddLFxuICAgICAgICAgICAgICAgIFsnbGluaycsICdibG9ja3F1b3RlJywgJ2NvZGUnLCAnaW1hZ2UnXSxcbiAgICAgICAgICAgICAgICBbXG4gICAgICAgICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGxpc3Q6ICdvcmRlcmVkJyxcbiAgICAgICAgICAgICAgICAgICAgfSxcbiAgICAgICAgICAgICAgICAgICAge1xuICAgICAgICAgICAgICAgICAgICAgICAgbGlzdDogJ2J1bGxldCcsXG4gICAgICAgICAgICAgICAgICAgIH0sXG4gICAgICAgICAgICAgICAgXSxcbiAgICAgICAgICAgIF0sXG4gICAgICAgIH0sXG4gICAgICAgIHRoZW1lOiAnc25vdycsXG4gICAgfTtcblxuICAgIGNvbnN0IG9wdGlvbnMgPSB7XG4gICAgICAgIC4uLmVsZW1lbnRPcHRpb25zLFxuICAgICAgICAuLi5kZWZhdWx0T3B0aW9ucyxcbiAgICB9O1xuXG4gICAgbmV3IFF1aWxsKHRvZ2dsZSwgb3B0aW9ucyk7XG59KTtcblxuLy8gTWFrZSBhdmFpbGFibGUgZ2xvYmFsbHlcbmRlY2xhcmUgZ2xvYmFsIHtcbiAgICBpbnRlcmZhY2UgV2luZG93IHtcbiAgICAgICAgUXVpbGw6IFF1aWxsO1xuICAgIH1cbn1cblxud2luZG93LlF1aWxsID0gUXVpbGw7IiwiLy8gVmVuZG9yXG5pbXBvcnQgJ2Jvb3RzdHJhcCc7XG5cbi8vIFRoZW1lIC0gR2xvYmFsbHkgYWNjZXNzaWJsZVxuaW1wb3J0ICcuL2Jvb3RzdHJhcCc7XG5pbXBvcnQgJy4vYXV0b3NpemUnO1xuaW1wb3J0ICcuL2Nob2ljZXMnO1xuaW1wb3J0ICcuL2Ryb3B6b25lJztcbmltcG9ydCAnLi9mbGF0cGlja3InO1xuaW1wb3J0ICcuL2lucHV0bWFzayc7XG5pbXBvcnQgJy4va2FuYmFuJztcbmltcG9ydCAnLi9saXN0JztcbmltcG9ydCAnLi9xdWlsbCc7XG5cbi8vIFRoZW1lIC0gT3RoZXJcbmltcG9ydCAnLi9jaGVja2xpc3QnO1xuaW1wb3J0ICcuL21hcCc7XG5pbXBvcnQgJy4vbmF2YmFyLWNvbGxhcHNlJztcbmltcG9ydCAnLi9uYXZiYXItZHJvcGRvd24nO1xuaW1wb3J0ICcuL3BvcG92ZXInO1xuaW1wb3J0ICcuL3Rvb2x0aXAnO1xuaW1wb3J0ICcuL3dpemFyZCc7IiwiLy9cbi8vIHBvcG92ZXIuanNcbi8vIFRoZW1lIG1vZHVsZVxuLy9cblxuaW1wb3J0IHtUb29sdGlwfSBmcm9tICdib290c3RyYXAnO1xuXG5jb25zdCB0b29sdGlwcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ1tkYXRhLWJzLXRvZ2dsZT1cInRvb2x0aXBcIl0nKTtcblxudG9vbHRpcHMuZm9yRWFjaCh0b29sdGlwID0+IHtcbiAgICBuZXcgVG9vbHRpcCh0b29sdGlwKTtcbn0pOyIsIi8vXG4vLyB3aXphcmQuanNcbi8vIERhc2hraXQgbW9kdWxlXG4vL1xuXG5pbXBvcnQge1RhYn0gZnJvbSAnYm9vdHN0cmFwJztcblxuY29uc3QgdG9nZ2xlcyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJ1tkYXRhLXRvZ2dsZT1cIndpemFyZFwiXScpO1xuXG50b2dnbGVzLmZvckVhY2godG9nZ2xlID0+IHtcbiAgICB0b2dnbGUuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCBmdW5jdGlvbiAoZSkge1xuICAgICAgICBlLnByZXZlbnREZWZhdWx0KCk7XG5cbiAgICAgICAgLy8gVG9nZ2xlIG5ldyB0YWJcbiAgICAgICAgY29uc3QgdGFiID0gbmV3IFRhYih0b2dnbGUpO1xuXG4gICAgICAgIHRhYi5zaG93KCk7XG5cbiAgICAgICAgLy8gUmVtb3ZlIGFjdGl2ZSBzdGF0ZVxuICAgICAgICB0b2dnbGUuY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJyk7XG4gICAgfSk7XG59KTtcbiIsIi8qKlxuICogV3JpdGUgeW91ciBvd24gSmF2YVNjcmlwdCBpbiB0aGlzIGZpbGVcbiAqL1xuXG5pbXBvcnQgJy4vZGFzaGtpdC90aGVtZSc7IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbInJlcXVpcmUiLCJ0b2dnbGVzIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yQWxsIiwiZm9yRWFjaCIsInRvZ2dsZSIsIndpbmRvdyIsImF1dG9zaXplIiwiYXV0b3NpemVfMSIsIkFsZXJ0IiwiYm9vdHN0cmFwXzEiLCJCdXR0b24iLCJDYXJvdXNlbCIsIkNvbGxhcHNlIiwiRHJvcGRvd24iLCJNb2RhbCIsIk9mZmNhbnZhcyIsIlBvcG92ZXIiLCJTY3JvbGxTcHkiLCJUYWIiLCJUb2FzdCIsIlRvb2x0aXAiLCJjaGVja2xpc3RzIiwiZHJhZ2dhYmxlXzEiLCJkcmFnZ2FibGUiLCJoYW5kbGUiLCJtaXJyb3IiLCJjb25zdHJhaW5EaW1lbnNpb25zIiwiZGVjb2RlSHRtbFNwZWNpYWxDaGFycyIsInN0ciIsInJlcGxhY2UiLCJtYXRjaCIsImRlYyIsIlN0cmluZyIsImZyb21DaGFyQ29kZSIsImluaXRDaG9pY2VzIiwidG9nZ2xlRWxlbWVudCIsIm9wdGlvbk92ZXJyaWRlcyIsImRlZmF1bHRPcHRpb25zIiwiYWxsb3dIVE1MIiwiY2xhc3NOYW1lcyIsImNvbnRhaW5lcklubmVyIiwiY2xhc3NOYW1lIiwiaW5wdXQiLCJpbnB1dENsb25lZCIsImxpc3REcm9wZG93biIsIml0ZW1DaG9pY2UiLCJhY3RpdmVTdGF0ZSIsInNlbGVjdGVkU3RhdGUiLCJzaG91bGRTb3J0IiwiY2FsbGJhY2tPbkNyZWF0ZVRlbXBsYXRlcyIsInRlbXBsYXRlIiwiY2hvaWNlIiwib3B0aW9ucyIsImRhdGEiLCJjbGFzc2VzIiwiaXRlbSIsImRpc2FibGVkIiwiaXRlbURpc2FibGVkIiwiaXRlbVNlbGVjdGFibGUiLCJyb2xlIiwiZ3JvdXBJZCIsInNlbGVjdFRleHQiLCJjb25maWciLCJpdGVtU2VsZWN0VGV4dCIsImxhYmVsIiwiY3VzdG9tUHJvcGVydGllcyIsImF2YXRhclNyYyIsImlkIiwidmFsdWUiLCJtdWx0aXBsZSIsImNob2ljZXMiLCJDaG9pY2VzIiwiZXhwb3J0cyIsImRhdGFDaG9pY2VzIiwiZ2V0QXR0cmlidXRlIiwiZWxlbWVudE9wdGlvbnMiLCJKU09OIiwicGFyc2UiLCJkcm9wem9uZV8xIiwiYXV0b0Rpc2NvdmVyIiwidGh1bWJuYWlsV2lkdGgiLCJ0aHVtYm5haWxIZWlnaHQiLCJjdXJyZW50RmlsZSIsInVuZGVmaW5lZCIsInByZXZpZXdzQ29udGFpbmVyIiwicXVlcnlTZWxlY3RvciIsInByZXZpZXdUZW1wbGF0ZSIsImlubmVySFRNTCIsImluaXQiLCJvbiIsImZpbGUiLCJtYXhGaWxlcyIsInJlbW92ZUZpbGUiLCJEcm9wem9uZSIsImZsYXRwaWNrciIsImZsYXRwaWNrcl8xIiwicmlnaHRBbGlnbiIsIm1hc2siLCJJbnB1dE1hc2siLCJpbnB1dG1hc2tfMSIsImNhdGVnb3JpZXMiLCJsaW5rcyIsImZvcm1zIiwidG9nZ2xlSXRlbXMiLCJlbCIsInBhcmVudCIsImNsb3Nlc3QiLCJjYXJkIiwibGluayIsImZvcm0iLCJjbGFzc0xpc3QiLCJjb250YWlucyIsInJlbW92ZSIsImFkZCIsImFkZEV2ZW50TGlzdGVuZXIiLCJlIiwicHJldmVudERlZmF1bHQiLCJTb3J0YWJsZSIsImxpc3RzIiwic29ydHMiLCJsaXN0IiwibGlzdEFsZXJ0IiwibGlzdEFsZXJ0Q291bnQiLCJsaXN0QWxlcnRDbG9zZSIsImxpc3RDaGVja2JveGVzIiwibGlzdENoZWNrYm94QWxsIiwibGlzdFBhZ2luYXRpb24iLCJsaXN0UGFnaW5hdGlvblByZXYiLCJsaXN0UGFnaW5hdGlvbk5leHQiLCJsaXN0T3B0aW9ucyIsImRhdGFzZXQiLCJsaXN0Q2xhc3MiLCJzZWFyY2hDbGFzcyIsInNvcnRDbGFzcyIsIk9iamVjdCIsImFzc2lnbiIsImxpc3RPYmoiLCJsaXN0X2pzXzEiLCJjYWxsIiwicGFnaW5hdGlvbiIsIm5leHRJdGVtIiwicGFyc2VJbnQiLCJpIiwicGFnZSIsInNpemUiLCJzaG93IiwicHJldkl0ZW0iLCJjaGVja2JveCIsImNvdW50Q2hlY2tib3hlcyIsImNoZWNrZWQiLCJzbGljZSIsImZpbHRlciIsImxlbmd0aCIsInNvcnQiLCJMaXN0IiwibWFwcyIsImFjY2Vzc1Rva2VuIiwibWFwYm94X2dsXzEiLCJtYXAiLCJjb250YWluZXIiLCJzdHlsZSIsInNjcm9sbFpvb20iLCJpbnRlcmFjdGl2ZSIsIk1hcCIsImNvbGxhcHNlcyIsImNvbGxhcHNlSW5zdGFuY2UiLCJjb2xsYXBzZSIsInN0b3BQcm9wYWdhdGlvbiIsImNsb3Nlc3RDb2xsYXBzZSIsInBhcmVudEVsZW1lbnQiLCJzaWJsaW5nQ29sbGFwc2VzIiwic2libGluZ0NvbGxhcHNlSW5zdGFuY2UiLCJnZXRJbnN0YW5jZSIsInNpYmxpbmdDb2xsYXBzZSIsImhpZGUiLCJjaGlsZENvbGxhcHNlcyIsImNoaWxkQ29sbGFwc2VJbnN0YW5jZSIsImNoaWxkQ29sbGFwc2UiLCJzZWxlY3RvcnMiLCJkcm9wZG93bnMiLCJOQVZCQVJfQlJFQUtQT0lOVCIsImlubmVyV2lkdGgiLCJkcm9wZG93biIsImluc3RhbmNlIiwicG9wb3ZlcnMiLCJwb3BvdmVyIiwibW9kdWxlcyIsInRvb2xiYXIiLCJ0aGVtZSIsInF1aWxsXzEiLCJRdWlsbCIsInRvb2x0aXBzIiwidG9vbHRpcCIsInRhYiJdLCJzb3VyY2VSb290IjoiIn0=