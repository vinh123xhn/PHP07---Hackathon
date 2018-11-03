<!DOCTYPE html>

<html lang="vi" class="mac webkit chrome cursor">

<head>
    <title>Mang Quizlet theo bạn | Quizlet</title>
    <link as="font" crossorigin="anonymous" href=":https://quizlet.com/a/i/fonts/latin-basic/hurmegeosans-no2-400.J8Wu.woff2" rel="preload" type="font/woff2">
    <link as="font" crossorigin="anonymous" href=":https://quizlet.com/a/i/fonts/latin-basic/hurmegeosans-no2-600.DQUe.woff2" rel="preload" type="font/woff2">
    <link as="fetch" crossorigin="anonymous" href=":https://quizlet.com/a/i/icons.qQdV.svg" rel="preload">
    <link rel="stylesheet" type="text/css" href="https://quizlet.com/a/c/global/index.ZcBtB.n.css">
    <link rel="stylesheet" type="text/css" href="https://quizlet.com/a/c/logout/index.dtY3q.n.css">
    <link rel="stylesheet" type="text/css" href="https://quizlet.com/a/c/ui/index.AGYx2.n.css">
    <link rel="dns-prefetch" href="//up.quizlet.com">
    <meta property="og:site_name" content="Quizlet">
    <link rel="shortcut icon" href="https://quizlet.com/a/i/favicon.MDra.ico">
    <meta name="referrer" content="origin-when-cross-origin">
    <meta name="description" content="Quizlet là phương pháp học từ vựng siêu tốc.">
    <script>
        var _rollbarConfig = {
            "accessToken": "27dcc4189dcf44d98247b58699a3e517",
            "captureUncaught": true,
            "captureUnhandledRejections": true,
            "enabled": true,
            "hostWhiteList": ["quizlet.com\\\/(?!(static\\\/rollbar))"],
            "ignoredMessages": ["InvalidStateError", "UnknownError", "(Uncaught )?SyntaxError.*", "Origin is not allowed.*", "Ad container with id dfp-.*", ".*__gCrWeb.*", ".*b\\.postMessage is not a function.*", ".*mobicip.*", ".*hilitor.*", ".*Blocked a frame with origin.*", ".*event is not defined.*", ".*didEnterViewPort", ".*ms exceeded"],
            "maxItems": 50,
            "payload": {
                "context": "Logout\/logoutMobileSplash",
                "server": {
                    "root": ".\/"
                },
                "environment": "production",
                "client": {
                    "javascript": {
                        "source_map_enabled": true,
                        "code_version": "e7033c373451a3d1aec44b2eb7a49b9093917cff",
                        "guess_uncaught_frames": true
                    }
                },
                "person": {
                    "id": "-3395576602222604931",
                    "username": null
                }
            },
            "rollbarJsUrl": "\/static\/rollbarv2.3.9.min.js"
        };
        _rollbarConfig.transform = function xformPayload(payload) {
            if (typeof payload.data === "undefined") payload.data = {};
            if (window.FS) payload.fullstoryUrl = FS.getCurrentSessionURL(true);
            return payload;
        };
        _rollbarConfig.checkIgnore = function shouldIgnore(isUncaught, args, payload) {
            if (navigator.plugins["Gnome Shell Integration"]) {
                return true;
            }
            var body = payload.body || {};
            var m = (body.message && body.message.body) || (body.exception && body.exception && body.exception.message);
            if (!m) return false;
            if (m.match(/unhandled rejection was null or undefined/) || m.match(/Access-Control-Allow-Origin/)) {
                return true;
            }
            return false;
        };
    </script>
    <script>
        var _originForRollbar = window.location.origin || window.location.protocol + '//' + window.location.hostname + (window.location.port ? ':' + window.location.port : '');
        _rollbarConfig.enabled = _rollbarConfig.enabled && _originForRollbar === "https:\/\/quizlet.com";
    </script>
    <script>
        ! function(r) {
            function o(n) {
                if (e[n]) return e[n].exports;
                var t = e[n] = {
                    exports: {},
                    id: n,
                    loaded: !1
                };
                return r[n].call(t.exports, t, t.exports, o), t.loaded = !0, t.exports
            }
            var e = {};
            return o.m = r, o.c = e, o.p = "", o(0)
        }([function(r, o, e) {
            "use strict";
            var n = e(1),
                t = e(4);
            _rollbarConfig = _rollbarConfig || {}, _rollbarConfig.rollbarJsUrl = _rollbarConfig.rollbarJsUrl || "https://cdnjs.cloudflare.com/ajax/libs/rollbar.js/2.3.6/rollbar.min.js", _rollbarConfig.async = void 0 === _rollbarConfig.async || _rollbarConfig.async;
            var a = n.setupShim(window, _rollbarConfig),
                l = t(_rollbarConfig);
            window.rollbar = n.Rollbar, a.loadFull(window, document, !_rollbarConfig.async, _rollbarConfig, l)
        }, function(r, o, e) {
            "use strict";

            function n(r) {
                return function() {
                    try {
                        return r.apply(this, arguments)
                    } catch (r) {
                        try {
                            console.error("[Rollbar]: Internal error", r)
                        } catch (r) {}
                    }
                }
            }

            function t(r, o) {
                this.options = r, this._rollbarOldOnError = null;
                var e = s++;
                this.shimId = function() {
                    return e
                }, window && window._rollbarShims && (window._rollbarShims[e] = {
                    handler: o,
                    messages: []
                })
            }

            function a(r, o) {
                var e = o.globalAlias || "Rollbar";
                if ("object" == typeof r[e]) return r[e];
                r._rollbarShims = {}, r._rollbarWrappedError = null;
                var t = new p(o);
                return n(function() {
                    o.captureUncaught && (t._rollbarOldOnError = r.onerror, i.captureUncaughtExceptions(r, t, !0), i.wrapGlobals(r, t, !0)), o.captureUnhandledRejections && i.captureUnhandledRejections(r, t, !0);
                    var n = o.autoInstrument;
                    return o.enabled !== !1 && (void 0 === n || n === !0 || "object" == typeof n && n.network) && r.addEventListener && (r.addEventListener("load", t.captureLoad.bind(t)), r.addEventListener("DOMContentLoaded", t.captureDomContentLoaded.bind(t))), r[e] = t, t
                })()
            }

            function l(r) {
                return n(function() {
                    var o = this,
                        e = Array.prototype.slice.call(arguments, 0),
                        n = {
                            shim: o,
                            method: r,
                            args: e,
                            ts: new Date
                        };
                    window._rollbarShims[this.shimId()].messages.push(n)
                })
            }
            var i = e(2),
                s = 0,
                d = e(3),
                c = function(r, o) {
                    return new t(r, o)
                },
                p = d.bind(null, c);
            t.prototype.loadFull = function(r, o, e, t, a) {
                var l = function() {
                        var o;
                        if (void 0 === r._rollbarDidLoad) {
                            o = new Error("rollbar.js did not load");
                            for (var e, n, t, l, i = 0; e = r._rollbarShims[i++];)
                                for (e = e.messages || []; n = e.shift();)
                                    for (t = n.args || [], i = 0; i < t.length; ++i)
                                        if (l = t[i], "function" == typeof l) {
                                            l(o);
                                            break
                                        }
                        }
                        "function" == typeof a && a(o)
                    },
                    i = !1,
                    s = o.createElement("script"),
                    d = o.getElementsByTagName("script")[0],
                    c = d.parentNode;
                s.crossOrigin = "", s.src = t.rollbarJsUrl, e || (s.async = !0), s.onload = s.onreadystatechange = n(function() {
                    if (!(i || this.readyState && "loaded" !== this.readyState && "complete" !== this.readyState)) {
                        s.onload = s.onreadystatechange = null;
                        try {
                            c.removeChild(s)
                        } catch (r) {}
                        i = !0, l()
                    }
                }), c.insertBefore(s, d)
            }, t.prototype.wrap = function(r, o, e) {
                try {
                    var n;
                    if (n = "function" == typeof o ? o : function() {
                        return o || {}
                    }, "function" != typeof r) return r;
                    if (r._isWrap) return r;
                    if (!r._rollbar_wrapped && (r._rollbar_wrapped = function() {
                        e && "function" == typeof e && e.apply(this, arguments);
                        try {
                            return r.apply(this, arguments)
                        } catch (e) {
                            var o = e;
                            throw "string" == typeof o && (o = new String(o)), o._rollbarContext = n() || {}, o._rollbarContext._wrappedSource = r.toString(), window._rollbarWrappedError = o, o
                        }
                    }, r._rollbar_wrapped._isWrap = !0, r.hasOwnProperty))
                        for (var t in r) r.hasOwnProperty(t) && (r._rollbar_wrapped[t] = r[t]);
                    return r._rollbar_wrapped
                } catch (o) {
                    return r
                }
            };
            for (var u = "log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleUnhandledRejection,captureEvent,captureDomContentLoaded,captureLoad".split(","), f = 0; f < u.length; ++f) t.prototype[u[f]] = l(u[f]);
            r.exports = {
                setupShim: a,
                Rollbar: p
            }
        }, function(r, o) {
            "use strict";

            function e(r, o, e) {
                if (r) {
                    var t;
                    "function" == typeof o._rollbarOldOnError ? t = o._rollbarOldOnError : r.onerror && !r.onerror.belongsToShim && (t = r.onerror, o._rollbarOldOnError = t);
                    var a = function() {
                        var e = Array.prototype.slice.call(arguments, 0);
                        n(r, o, t, e)
                    };
                    a.belongsToShim = e, r.onerror = a
                }
            }

            function n(r, o, e, n) {
                r._rollbarWrappedError && (n[4] || (n[4] = r._rollbarWrappedError), n[5] || (n[5] = r._rollbarWrappedError._rollbarContext), r._rollbarWrappedError = null), o.handleUncaughtException.apply(o, n), e && e.apply(r, n)
            }

            function t(r, o, e) {
                if (r) {
                    "function" == typeof r._rollbarURH && r._rollbarURH.belongsToShim && r.removeEventListener("unhandledrejection", r._rollbarURH);
                    var n = function(r) {
                        var e, n, t;
                        try {
                            e = r.reason
                        } catch (r) {
                            e = void 0
                        }
                        try {
                            n = r.promise
                        } catch (r) {
                            n = "[unhandledrejection] error getting `promise` from event"
                        }
                        try {
                            t = r.detail, !e && t && (e = t.reason, n = t.promise)
                        } catch (r) {
                            t = "[unhandledrejection] error getting `detail` from event"
                        }
                        e || (e = "[unhandledrejection] error getting `reason` from event"), o && o.handleUnhandledRejection && o.handleUnhandledRejection(e, n)
                    };
                    n.belongsToShim = e, r._rollbarURH = n, r.addEventListener("unhandledrejection", n)
                }
            }

            function a(r, o, e) {
                if (r) {
                    var n, t, a = "EventTarget,Window,Node,ApplicationCache,AudioTrackList,ChannelMergerNode,CryptoOperation,EventSource,FileReader,HTMLUnknownElement,IDBDatabase,IDBRequest,IDBTransaction,KeyOperation,MediaController,MessagePort,ModalWindow,Notification,SVGElementInstance,Screen,TextTrack,TextTrackCue,TextTrackList,WebSocket,WebSocketWorker,Worker,XMLHttpRequest,XMLHttpRequestEventTarget,XMLHttpRequestUpload".split(",");
                    for (n = 0; n < a.length; ++n) t = a[n], r[t] && r[t].prototype && l(o, r[t].prototype, e)
                }
            }

            function l(r, o, e) {
                if (o.hasOwnProperty && o.hasOwnProperty("addEventListener")) {
                    for (var n = o.addEventListener; n._rollbarOldAdd && n.belongsToShim;) n = n._rollbarOldAdd;
                    var t = function(o, e, t) {
                        n.call(this, o, r.wrap(e), t)
                    };
                    t._rollbarOldAdd = n, t.belongsToShim = e, o.addEventListener = t;
                    for (var a = o.removeEventListener; a._rollbarOldRemove && a.belongsToShim;) a = a._rollbarOldRemove;
                    var l = function(r, o, e) {
                        a.call(this, r, o && o._rollbar_wrapped || o, e)
                    };
                    l._rollbarOldRemove = a, l.belongsToShim = e, o.removeEventListener = l
                }
            }
            r.exports = {
                captureUncaughtExceptions: e,
                captureUnhandledRejections: t,
                wrapGlobals: a
            }
        }, function(r, o) {
            "use strict";

            function e(r, o) {
                this.impl = r(o, this), this.options = o, n(e.prototype)
            }

            function n(r) {
                for (var o = function(r) {
                    return function() {
                        var o = Array.prototype.slice.call(arguments, 0);
                        if (this.impl[r]) return this.impl[r].apply(this.impl, o)
                    }
                }, e = "log,debug,info,warn,warning,error,critical,global,configure,handleUncaughtException,handleUnhandledRejection,_createItem,wrap,loadFull,shimId,captureEvent,captureDomContentLoaded,captureLoad".split(","), n = 0; n < e.length; n++) r[e[n]] = o(e[n])
            }
            e.prototype._swapAndProcessMessages = function(r, o) {
                this.impl = r(this.options);
                for (var e, n, t; e = o.shift();) n = e.method, t = e.args, this[n] && "function" == typeof this[n] && ("captureDomContentLoaded" === n || "captureLoad" === n ? this[n].apply(this, [t[0], e.ts]) : this[n].apply(this, t));
                return this
            }, r.exports = e
        }, function(r, o) {
            "use strict";
            r.exports = function(r) {
                return function(o) {
                    if (!o && !window._rollbarInitialized) {
                        r = r || {};
                        for (var e, n, t = r.globalAlias || "Rollbar", a = window.rollbar, l = function(r) {
                            return new a(r)
                        }, i = 0; e = window._rollbarShims[i++];) n || (n = e.handler), e.handler._swapAndProcessMessages(l, e.messages);
                        window[t] = n, window._rollbarInitialized = !0
                    }
                }
            }
        }]);
    </script>
    <script>
        var Quizlet = {
            "LOGGED_IN": false,
            "SERVER_TIME": 1541217579,
            "DEBUG": false,
            "willHaveJquery": true,
            "willHaveMootools": false,
            "cstokenName": "qtkn",
            "blackAndWhitelistObfuscatedRegexesByLang": {
                "en": {
                    "black": "b\\ttubs\\ehts\\nib\\|b\\ssas\\ehts\\nib\\|huggin|eloh?]s\\-[ytoob|eloh?]s\\-[ttub|rekcuss\\)kcoc|kcid:?(|b\\?skcid?)s\\a?:(s\\?staeb\\|b\\kcids\\ymb\\|)kcoc|kcid:?(s\\)ruoy|sih|ym|a:?(s\\kcusb\\|b\\ffo?s\\gnikrejb\\|b\\ffo?]-s\\[krejb\\|b\\ffo?s\\gnikcajb\\|b\\ffo?]-s\\[kcajb\\|kcid?s\\yeknod|b\\erohwb\\|toggaf|b\\zzijb\\|b\\boj?]-s\\[wolbb\\|b\\eye?]-s\\[tnalsb\\|b\\yekcoj?]-s\\[lemacb\\|b\\ssa?]-s\\[dralb\\|b\\ssa?]-s\\[tafb\\|nmad?]-s\\[dog|daeh*s\\lewot|kcoc*s\\?skcus|kcid*s\\?skcus|regginb\\|)dr!?(agginb\\|rekcap*s\\egduf|kcuf|ssa?]-s\\[bmud|gab?]-s\\[ehcuod|b\\?stnucb\\|kcuskcoc|b\\?selohssab\\",
                    "white": "b\\tnucidb\\|ttubs\\ehts\\nis\\)mih|reh|uoy|em:?(s\\etib|ttubs\\ehts\\nis\\niap|ssas\\ehts\\nis\\niap"
                },
                "es": {
                    "black": "nole]j|g[oc|]a|o[reluc|)agrev|adreim:?(?]-s\\[al?]-s\\[a?]-s\\[etev|b\\agrevb\\|sallopalpos|b\\?sa?kkiramb\\|]o|a[damam|solucemal|atup]o|a[jih|atup?]-s\\[ed?]-s\\[]o|a[jih|ajap?]-s\\[anu?]-s\\[recah|)rod|r:?(allof|erdam]-s\\[ut]-s\\[ed]-s\\[ahcnoc|sallopapuhc|]oa[dapuhc",
                    "white": "b\\esrallofirepmeb\\|b\\arelucseb\\|b\\odapuhcs\\?ratseb\\"
                },
                "de": {
                    "black": "lethcuwhcs|rehcstulznawhcs|neppop|nrepmip|reggin|itfum|neseom|es\u00f6m|emmik|ekanak|eztarbkcak|eztof|kcifb\\|nesmub|hcsrab\\|rettirlana",
                    "white": "b\\?eztesegs\\?sehcs?'kcifb\\"
                }
            },
            "audioSpeeds": {
                "ja": {
                    "normal": 83,
                    "slow": 60,
                    "medium": 70
                },
                "ko": {
                    "normal": 83,
                    "slow": 60,
                    "medium": 70
                },
                "fr": {
                    "normal": 100,
                    "slow": 60,
                    "medium": 75
                },
                "default": {
                    "normal": 100,
                    "slow": 70,
                    "medium": 85
                }
            },
            "cloudFlareRay": "473bedf1be27855c-HKG",
            "didJustUpgrade": null,
            "uid": "-3395576602222604931",
            "user": null,
            "ab_enrolled_variations": "RemoveJSPageLoad:control,SetPageBranchIoAppBanner_20180822:experiment",
            "abTestConfiguration": [{
                "name": "VideoAdPerformanceTest_20181030",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": null
            }, {
                "name": "CouponOnNewUpgradeScreen_20181022",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": "control"
            }, {
                "name": "RemoveJSPageLoad",
                "supportsEnrollment": true,
                "isEnrolled": true,
                "variationSubjectToEnrollmentRules": "control"
            }, {
                "name": "TeacherOnboardingPhaseTwo",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": null
            }, {
                "name": "UpgradePageShowGoFirst_20181018",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": "goFirst"
            }, {
                "name": "HeaderBiddingSetPageLoggedOut_20181015",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": null
            }, {
                "name": "UpgradePageRedesignTeacher_20181011",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": "experiment"
            }, {
                "name": "UpgradePageRedesignNonTeacher_20181011",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": "experiment"
            }, {
                "name": "VideoAdSetPageFooterLoggedOut_20181029",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": "control"
            }, {
                "name": "SetPageCardsPreviewSignupWall_20181031",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": "control"
            }, {
                "name": "TMTSetPageAdTestLoggedOut_20180913",
                "supportsEnrollment": true,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": "control"
            }, {
                "name": "VideoAdSpellModeLoggedOut_20180928",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": "control"
            }, {
                "name": "UKHomepageNewSets",
                "supportsEnrollment": true,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": "experiment"
            }, {
                "name": "HeapTrial_20181012",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": "experiment"
            }, {
                "name": "SetPageBranchIoAppBanner_20180822",
                "supportsEnrollment": true,
                "isEnrolled": true,
                "variationSubjectToEnrollmentRules": "experiment"
            }, {
                "name": "SetPageHoldOut_20180918",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": null
            }, {
                "name": "GoogleYoloAutologin_20180813",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": "autologin"
            }, {
                "name": "NewLearnModeProgress_20180904",
                "supportsEnrollment": true,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": "experiment"
            }, {
                "name": "HomepageTestimonialsGb_20180911",
                "supportsEnrollment": true,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": "experiment"
            }, {
                "name": "NewTeacherPage_07272018",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": "experiment"
            }, {
                "name": "adsHoldOut_20180315",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": null
            }, {
                "name": "gqlFolders",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": null
            }, {
                "name": "delightedNps",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": null
            }, {
                "name": "fullStoryVariation",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": null
            }, {
                "name": "fullStoryVariationUk",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": null
            }, {
                "name": "webpackVariation",
                "supportsEnrollment": false,
                "isEnrolled": false,
                "variationSubjectToEnrollmentRules": "a"
            }],
            "i18nFlagExternalizedMessages": false,
            "isPageloadDataCollectionEnabled": true,
            "adConfig": {
                "allAdsDisabled": "goodbye_page",
                "keyValues": {
                    "childDirected": "no",
                    "n": "vi",
                    "l": "0",
                    "p": "1",
                    "v": "1"
                },
                "registeredAds": {
                    "NewFooterLO": {
                        "isFlexible": false,
                        "showAdHeading": true,
                        "supportsVideo": false,
                        "useHeaderBidding": false,
                        "type": "FOOTER"
                    }
                },
                "shouldLogAdRequests": true,
                "tagForChildDirectedTreatment": 0
            },
            "underAgeCutoff": 13,
            "upsellPrice": "19,99\u00a0US$",
            "upsellMonthlyPrice": "1,67\u00a0US$",
            "upsellProductType": 14,
            "goUpsellPrice": "11,99\u00a0US$",
            "goUpsellMonthlyPrice": "1\u00a0US$",
            "goUpsellProductType": 20,
            "iconPaths": null,
            "recurlyKey": "ewr1-74WTM8nDUDdRhj2nlyzwZj",
            "extraSessionUUIDs": ["846176ea-8f68-4516-babe-fcc1a72cb840", "d9c0c3e4-3ffc-45f9-af99-d32a79db8e42", "f3e9b676-6125-4455-a00c-32994599f88d", "37c1512a-c34c-4d6a-962a-29e47984df63", "a24c4717-fc4b-461a-b046-080a723a8101"],
            "countryCode": "vn",
            "lowerTeacherAgeBound": 22,
            "upperTeacherAgeBound": 80,
            "requestId": "XNnaws566VqmQJDvsY8y",
            "colorTheme": "default",
            "upgradeData": {
                "freeTrial": null
            }
        };
        Quizlet.actionString = "Logout\"logoutMobileSplash".replace(/"/g, '/');
    </script>
    <script>
        window.ga = function() {
            (ga.q = ga.q || []).push(arguments)
        };
        ga.l = +new Date;
        window.QWait = function() {
            QWait.p.push(arguments)
        };
        QWait.p = [];
        window.QLoad = function() {
            QLoad.p.push(arguments)
        };
        QLoad.p = [];
        window.QJP = [];
    </script>
    <script>
        (function(e, b) {
            b.getCsToken = function() {
                var a;
                a = e.cookie.match("(?:^|;)\\s*" + b.cstokenName.replace(/[\-\[\]{}()*+?.,\\^$|#\s]/g, "$&") + "=([^;]*)");
                a = null !== a ? decodeURIComponent(a[1]) : null;
                return a
            };
            b.appendCstokenToForm = function(a) {
                var c = b.getCsToken();
                c ? (b.setHiddenFormElement(a, "cstoken", c), b.addCsTokenDebugging(a)) : Rollbar.warning("csrf_cookie_missing")
            };
            b.setHiddenFormElement = function(a, c, b) {
                var d = !1;
                if (a.querySelectorAll) {
                    var f = a.querySelectorAll("input[type='hidden'][name='" + c + "']");
                    if (0 < f.length)
                        for (var d = !0, g = 0; g < f.length; g++) f[g].value = b
                }
                d || (d = e.createElement("input"), d.type = "hidden", d.name = c, d.value = b, a.appendChild(d))
            };
            b.addCsTokenDebugging = function(a) {
                b.setHiddenFormElement(a, "cstokenV2", b.getCsTokenV2());
                b.setHiddenFormElement(a, "cstokenFieldCount", "" + b.getFormFieldCount(a, "cstoken"));
                b.setHiddenFormElement(a, "cstokenSetByJs", "1")
            };
            b.getCsTokenV2 = function() {
                for (var a = b.cstokenName + "=", c = document.cookie ? document.cookie.split(/;\s*/) : [], h = [], d = 0; d < c.length; d++) {
                    var f = c[d];
                    f && 0 === f.indexOf(a) &&
                    h.push(f.substr(a.length))
                }
                return h.join(";")
            };
            b.getFormFieldCount = function(a, c) {
                for (var b = 0, d = 0; d < a.elements.length; d++) "hidden" === a.elements[d].type && a.elements[d].name === c && b++;
                return b
            };
            var k = function(a) {
                a = a.target || a.srcElement;
                var c = a.method.toLowerCase();
                "post" !== c && "put" !== c && "delete" !== c && "patch" !== c || b.appendCstokenToForm(a)
            };
            "addEventListener" in e ? e.addEventListener("submit", k, !1) : e.attachEvent && e.attachEvent("onsubmit", k);
            b.willHaveJquery ? QWait("jquery", function() {
                $.ajaxPrefilter(function(a) {
                    var c =
                        a.type.toLowerCase();
                    if ("post" === c || "put" === c || "delete" === c || "patch" === c) {
                        var c = b.getCsToken(),
                            e = "cstoken=" + encodeURIComponent(c);
                        a.data && "[object FormData]" === a.data.toString() ? a.data.append("cstoken", c) : a.data = a.data ? a.data + ("&" + e) : e
                    }
                })
            }) : b.willHaveMootools && QWait("mootools", function() {
                var a = function() {
                    var a = b.getCsToken();
                    Request.prototype.options.headers = {
                        "X-Requested-With": "XMLHttpRequest",
                        Accept: "text/javascript, text/html, application/xml, text/xml, */*",
                        "Cs-Token": a
                    };
                    Request.prototype.options.data = {
                        cstoken: a
                    }
                };
                a();
                setInterval(a, 3E3)
            })
        })(document, Quizlet);
    </script>
    <script>
        QWait('dom', function teaser() {
            if (window.console && window.console.log) {
                console.log("\n .d88888b.           d8b          888          888\nd88P\" \"Y88b          Y8P          888          888\n888     888                       888          888\n888     888 888  888 888 88888888 888  .d88b.  888888\n888     888 888  888 888    d88P  888 d8P  Y8b 888\n888 Y8b 888 888  888 888   d88P   888 88888888 888\nY88b.Y8b88P Y88b 888 888  d88P    888 Y8b.     Y88b.\n \"Y888888\"   \"Y88888 888 88888888 888  \"Y8888   \"Y888\n       Y8b\n\nThe world of education is changing, and a generation of students is turning to digital learning tools.\nQuizlet is building those tools... come join us!\n\nCheck out our jobs page at: https:\/\/quizlet.com\/jobs");
            }
        });
    </script>
    <script>
        (function() {
            var ajax = new XMLHttpRequest();
            ajax.open('GET', "\/a\/i\/icons.qQdV.svg");
            ajax.send();
            ajax.onload = function() {
                if (ajax.status !== 200) return Rollbar.warning('Error fetching SVG sprite sheet (bad response)', {
                    code: ajax.status
                });
                var div = document.createElement('div');
                div.style.display = 'none';
                div.innerHTML = ajax.responseText;
                var waitForBody = setInterval(function() {
                    if (document.body) {
                        clearInterval(waitForBody);
                        document.body.insertBefore(div, document.body.childNodes[0]);
                    }
                }, 10);
            };
        })();
    </script>
    <script>
        if (!window.Intl) {
            var script = document.createElement("script");
            script.setAttribute("src", "/a/j/dist/i18n.ada768d2c9d483347b70.a.vi.js");
            script.setAttribute("async", "");
            script.setAttribute("defer", "");
            script.setAttribute("integrity", "sha512-h4IjSFvxOeptlOQkagC7zOB37t165K0ed3PT0CaDH4BfFgVeN9HlczQh3pUF25BVw0vxcP3Qcf7Qwt6a4fDSdQ==");
            document.querySelector("head").appendChild(script);
        } else {
            QLoad('Quizlet.Common.i18n');
        }
    </script>
    <script async src="/a/j/dist/main.9dbff6d859d49f410acd.a.vi.js" defer integrity="sha512-TP0xFiiz2roKSdckLv58GhJEX6pWRkTJ/AxhFYI2c/pfUb05nG3VABp+J2cGEQE2yvdgzn+diXubjf74LJg1cA=="></script>
    <script async src="/a/j/dist/ads.e4e6fddd67a7c0686a6a.a.vi.js" defer integrity="sha512-QI0FlqSYQBGo2KDQkxYjrn3fHR/Y6HX52qEcwyvDUE/FP90XcogXhflqiwHXkoP+7luCppUZFHXT9qKl8O7xQQ=="></script>
    <script async src="/a/j/dist/header_and_common.55163bfd5cabc1e050eb.a.vi.js" defer integrity="sha512-roi4NZ/nUFSf0ozU2OYQckKEELuPXyIXly6YUxptV9My4fyF8215bHyhfi7eJ89J6MXXfEM0p2AvOjFTzb8Kvg=="></script>
    <script async src="/a/j/dist/quizlib_jquery_2.24440ed027ff6fbb786f.a.vi.js" defer integrity="sha512-lVcupCmpza6/IHcki+9MjEVFaz3QL+AOr/fZbGNy5fUcsGoeGAVL7ezDGLqfnCw+IY5obpWfzvyTF+G6Hb0h5g=="></script>
    <script async src="/a/j/dist/common.b4ddc0e57002338.a.vi.js" defer integrity="sha512-DXqB0juOh+OL1J1+pUEl+Uj53j4eaFOPOHqTrDLpWu2UVbdPVxDmRImI/7lI5A6mIFsvvOdHMlLKCVvjYhRq5A=="></script>
    <script async src="/a/j/dist/react.6f0a7e58dbbf667.a.vi.js" defer integrity="sha512-MN2xAcvtizsgzIq3Tjrq/S8sHpuMURx4yuUPIzR/dyu3zUa2YdAaEEkCRX/M/2h6Cn3uzm8utePlr9o2/IEd1Q=="></script>
    <script async src="/a/j/dist/redux_and_immutable.c128da4b481c21b.a.vi.js" defer integrity="sha512-A/nDXQV0HgxWbPIBt7AqsBa6fSSfiLog+7B7yMAzfeJffbTiuFzXfzPvoEeNjQIOQk1S+WvJNMB43l3MbEXBYg=="></script>
    <script async src="/a/j/dist/leaflet.cf6f716965d760f.a.vi.js" defer integrity="sha512-m2j1nVr0VWnFuMb2dq/nkinJEKPzhpoe9rIlq3DdyMxrWinupQzkwe2PXKoPkeFBEIFVTK7ix8KEIFlQ/iq9LA=="></script>
    <script async src="/a/j/dist/quizlet_shared_kotlin.d6cd9d5fff904ca.a.vi.js" defer integrity="sha512-4t9ylHFXT/j7CsCvzxyKEv0jMpvxRNdiw4Oouk1eH/pI886LJRaQ7806zRP8sBMH69omKTbihy6n7sJbkVfsDA=="></script>
</head>

<body class="logout logout_mobile_splash white has-footer qad-is-hiding" itemscope itemtype="http://schema.org/WebPage">

<div class="ads ad adsbox doubleclick ad-placement carbon-ads __isAdBlockerEnabled" style="position: absolute; width: 10px; height: 10px; left: -100px; top: -100px;">&nbsp;</div>

<div class="site">

    <script>
        window.Quizlet["coreData"] = {
            "acknowledgedOnboardingSteps": {},
            "shouldShowAd": false,
            "user": null
        };
        QLoad("Quizlet.coreData");
    </script>
    <script>
        window.Quizlet["userPromptsData"] = {
            "canResendConfirmationEmail": null,
            "formattedTeacherUpsellMonthlyPrice": null,
            "hasExceededMaxConfirmationEmailResends": null,
            "requestUri": "\/goodbye",
            "shouldShowBrazilAmbassadorPrompt": false,
            "shouldShowConfirmEmailPrompt": false,
            "shouldShowTeacherStatusPrompt": false,
            "supportEmail": null
        };
        QLoad("Quizlet.userPromptsData");
    </script>
    <script>
        window.Quizlet["siteNavData"] = {
            "blogEntry": [],
            "bookmarkedFolders": [],
            "canCreateClass": false,
            "canJoinClasses": false,
            "classInvitations": [],
            "classMemberships": [],
            "folders": [],
            "isUserInFreeTrial": false,
            "mainSchool": null,
            "numClassesAllowed": 0,
            "numClassesUsed": 0,
            "showBlog": false,
            "showRenewLink": false,
            "user": null,
            "userFoldersByFolderId": [],
            "userSchools": []
        };
        QLoad("Quizlet.siteNavData");
    </script>
    <div class="SiteHeaderWrapper" id="SiteHeaderReactTarget">
        <header class="SiteHeader" itemscope="true" itemtype="http://schema.org/WPHeader" role="navigation">
            <div class="UIContainer UIContainer--isFullBleed">
                <div class="SiteHeader-wrapper">
                    <div class="SiteHeader-logo SiteHeader-section">
                        <a class="UILink UILink--inverted" href="/vi">
                            <div class="SiteHeader-logoWrapper">
                                <div aria-label="Quizlet" class="SiteLogo" role="img" title="Quizlet">
                                    <svg fill="currentColor" viewBox="0 0 244 53" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M26.99 1.09c15.382 0 26.99 11.36 26.99 25.883 0 6.687-2.54 12.583-6.676 17.04l7.182 7.98H42.37l-2.49-2.847c-3.6 2.482-8.102 3.638-12.89 3.638C11.68 52.784 0 41.496 0 26.974 0 12.017 12.116 1.09 26.99 1.09zm0 41.7c2.03 0 3.844-.43 5.586-1.15L22.2 29.993h12.117l5.587 6.4c2.03-2.518 2.974-5.537 2.974-9.42 0-8.698-6.6-15.817-15.89-15.817-9.287 0-15.814 7.046-15.814 15.817 0 8.915 6.527 15.818 15.815 15.818zM61.035 15.76H71.99v20.706c0 4.89 3.048 6.686 6.676 6.686 3.627 0 6.675-1.797 6.675-6.686V15.758h10.956v21.64C96.296 48.04 88.026 53 78.666 53s-17.63-4.96-17.63-15.6V15.757zm42.75 36.235h10.81V15.758h-10.81v36.235zm-.992-45.69c0-3.56 2.92-6.303 6.36-6.303 3.518 0 6.36 2.743 6.36 6.303 0 3.485-2.842 6.23-6.36 6.23-3.44 0-6.36-2.745-6.36-6.23zm35.738 18.873h-16.74v-9.418h35.332l-20.15 26.817h19.133v9.418h-37.94l20.365-26.817zm23.67 26.817h10.81V1.883H162.2v50.11zm17.063-18.19c0-11.503 8.272-18.908 19.372-18.908 11.173 0 18.5 8.196 18.5 18.334 0 0 0 2.03-.217 3.684h-26.843c.218 4.314 3.48 6.883 9.648 6.883 6.966 0 10.883-2.085 12.987-3.523v9.347c-3.41 2.157-7.182 3.308-13.567 3.308-12.263 0-19.88-7.405-19.88-18.765v-.36zm26.99-4.026c0-3.235-3.337-5.967-7.618-5.967-4.498 0-8.27 2.66-8.488 5.967h16.105zm19.172-4.313h-4.86v-9.706h4.86V1.882h10.52v13.876H244v9.706h-8.054v26.53h-10.52v-26.53z" fill-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="SiteHeader-defaultDesktop">
                        <div class="SiteHeader-search SiteHeader-section">
                            <a class="UILink UILink--inverted" href="/subject/">
                                <div class="SiteHeader-searchInner">
                                    <svg class="UIIcon UIIcon--search SiteHeader-searchSubmitIcon SiteHeader-icon UIIcon--large">
                                        <noscript></noscript>
                                        <use xlink:href="#search"></use>
                                        <noscript></noscript>
                                    </svg>
                                    <script>
                                        QWait('Quizlet.IconContainer', function() {
                                            Quizlet.IconContainer.loadIcon("search")
                                        })
                                    </script><span class="SiteHeader-linkText">Tìm kiếm</span></div>
                            </a>
                        </div>
                        <div class="SiteHeader-create SiteHeader-section">
                            <a class="UILink UILink--inverted" href="https://quizlet.com/create-set">
                                <svg class="UIIcon UIIcon--create-set SiteHeader-createIcon SiteHeader-icon UIIcon--large">
                                    <noscript></noscript>
                                    <use xlink:href="#create-set"></use>
                                    <noscript></noscript>
                                </svg>
                                <script>
                                    QWait('Quizlet.IconContainer', function() {
                                        Quizlet.IconContainer.loadIcon("create-set")
                                    })
                                </script><span class="SiteHeader-linkText">Tạo</span></a>
                        </div>
                        <div class="SiteHeader-userSection SiteHeader-section">
                            <div class="SiteHeader-signIn"><a class="UILink UILink--inverted" href="/login"><span class="SiteHeader-signInBtn">Đăng nhập</span></a><a class="UIButton" role="button" href="/sign-up"><span class="UIButton-wrapper">Đăng ký</span></a></div>
                        </div>
                    </div>
                    <div class="SiteHeader-defaultMobileHeader SiteHeader-section"><span aria-label="Tìm kiếm" class="SiteHeader-mobileLinkArea"><a class="UILink UILink--inverted" href="/subject/"><svg class="UIIcon UIIcon--search SiteHeader-icon UIIcon--large"><noscript></noscript><use xlink:href="#search"></use><noscript></noscript></svg><script>QWait('Quizlet.IconContainer',function(){Quizlet.IconContainer.loadIcon("search")})</script></a></span>
                        <div class="SiteHeader-signIn"><a class="UILink UILink--inverted" href="/login"><span class="SiteHeader-signInBtn">Đăng nhập</span></a><a class="UIButton" role="button" href="/sign-up"><span class="UIButton-wrapper">Đăng ký</span></a></div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <script>
        window.Quizlet["headerData"] = {
            "createSetPath": "https:\/\/quizlet.com\/create-set",
            "feedbackMinorCategoryId": -1,
            "headerChicletData": null,
            "initialIsSearchExpanded": false,
            "initialQuery": "",
            "isHelpCenter": false,
            "loginFormData": null,
            "referer": null,
            "searchAction": "\/subject",
            "signupFormData": null,
            "user": null,
            "userDropdownData": null
        };
        QLoad("Quizlet.headerData");
    </script><img class="PrintLogo" id="QGbN5MEEWMb">
    <script>
        QWait("dom", function() {
            document.getElementById("QGbN5MEEWMb").setAttribute("src", "\/a\/i\/logo\/Quizlet-print.68Eu.png")
        });
    </script>
    <main class="page" id="page" role="main" itemscope itemprop="mainContentOfPage">
        <div class="LogoutMobileSplash">
            <div class="LogoutMobileSplash-main container">
                <div class="LogoutMobileSplash-intro">
                    <div class="LogoutMobileSplash-heading">
                        <h2 class="LogoutMobileSplash-loggedOut">Bạn đã đăng xuất thành công.</h2>
                        <h1 class="LogoutMobileSplash-getApps">Mang Quizlet theo bạn</h1>
                    </div>

                </div>
                <div class="LogoutMobileSplash-appLinks">
                    <div class="MobileSplashAppLinks">
                        <a class="MobileSplashAppLinks-appLink MobileSplashAppLinks--ios" href="https://itunes.apple.com/us/app/quizlet-flashcards-study-tools/id546473125?mt=8" data-sourcename="iOS-splash-page"></a>
                        <a class="MobileSplashAppLinks-appLink MobileSplashAppLinks--android" href="https://play.google.com/store/apps/details?id=com.quizlet.quizletandroid&amp;hl=en&amp;referrer=utm_source%3Dlogoutmobile" data-sourcename="Android-splash-page"></a>
                    </div>
                </div>

                <div class="LogoutMobileSplash-phones">
                    <div class="Phones">
                        <div class="Phones-nexusWrapper">
                            <div class="Phones-nexus"></div>
                        </div>
                        <div class="Phones-iphoneWrapper">
                            <div class="Phones-iphone"></div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="LogoutMobileSplash-featureRow FeatureRow">
                <div class="container">
                    <div class="LogoutMobileSplash-featureWrapper FeatureRow-featureWrapper">
                        <div class="Feature ">
                            <h2 class="Feature-heading">Học bất cứ đâu</h2>
                            <span class="Feature-bodyText">
		Các công cụ &amp; trò chơi học tập của Quizlet được thiết kế đặc biệt để có tính di động cao	</span>
                        </div>
                    </div>
                    <div class="LogoutMobileSplash-featureWrapper FeatureRow-featureWrapper LogoutMobileSplash-featureWrapper--middle">
                        <div class="Feature ">
                            <h2 class="Feature-heading">Đồng bộ hoàn hảo</h2>
                            <span class="Feature-bodyText">
		Mọi dữ liệu học tập trên di động của bạn sẽ được đồng bộ hóa với trang web và ngược lại	</span>
                        </div>
                    </div>
                    <div class="LogoutMobileSplash-featureWrapper FeatureRow-featureWrapper">
                        <div class="Feature ">
                            <h2 class="Feature-heading">Học ngoại tuyến</h2>
                            <span class="Feature-bodyText">
		Với Quizlet Plus, bạn có thể học ở bất cứ đâu - dù ở trên máy bay, tàu hỏa hay ô tô	</span>
                        </div>
                    </div>
                </div>

                <section class="LogoutMobileSplash-attribution">
                    <p>Apple, biểu tượng của Apple, và iPhone là các thương hiệu của Apple Inc., được đăng ký tại Hoa Kỳ và các quốc gia khác. App Store là thương hiệu dịch vụ của Apple Inc.</p>
                </section>
            </section>

        </div>
    </main>
    <footer class="SiteFooter" itemscope="true" itemtype="http://schema.org/WPFooter" role="contentinfo">
        <div class="UIContainer">
            <div class="UIRow">
                <div class="SiteFooter-flexContainer">
                    <div class="SiteFooter-logo">
                        <a class="UILink UILink--inverted" href="/vi">
                            <div aria-label="Quizlet" class="SiteLogo" role="img" title="Quizlet">
                                <svg fill="currentColor" viewBox="0 0 244 53" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.99 1.09c15.382 0 26.99 11.36 26.99 25.883 0 6.687-2.54 12.583-6.676 17.04l7.182 7.98H42.37l-2.49-2.847c-3.6 2.482-8.102 3.638-12.89 3.638C11.68 52.784 0 41.496 0 26.974 0 12.017 12.116 1.09 26.99 1.09zm0 41.7c2.03 0 3.844-.43 5.586-1.15L22.2 29.993h12.117l5.587 6.4c2.03-2.518 2.974-5.537 2.974-9.42 0-8.698-6.6-15.817-15.89-15.817-9.287 0-15.814 7.046-15.814 15.817 0 8.915 6.527 15.818 15.815 15.818zM61.035 15.76H71.99v20.706c0 4.89 3.048 6.686 6.676 6.686 3.627 0 6.675-1.797 6.675-6.686V15.758h10.956v21.64C96.296 48.04 88.026 53 78.666 53s-17.63-4.96-17.63-15.6V15.757zm42.75 36.235h10.81V15.758h-10.81v36.235zm-.992-45.69c0-3.56 2.92-6.303 6.36-6.303 3.518 0 6.36 2.743 6.36 6.303 0 3.485-2.842 6.23-6.36 6.23-3.44 0-6.36-2.745-6.36-6.23zm35.738 18.873h-16.74v-9.418h35.332l-20.15 26.817h19.133v9.418h-37.94l20.365-26.817zm23.67 26.817h10.81V1.883H162.2v50.11zm17.063-18.19c0-11.503 8.272-18.908 19.372-18.908 11.173 0 18.5 8.196 18.5 18.334 0 0 0 2.03-.217 3.684h-26.843c.218 4.314 3.48 6.883 9.648 6.883 6.966 0 10.883-2.085 12.987-3.523v9.347c-3.41 2.157-7.182 3.308-13.567 3.308-12.263 0-19.88-7.405-19.88-18.765v-.36zm26.99-4.026c0-3.235-3.337-5.967-7.618-5.967-4.498 0-8.27 2.66-8.488 5.967h16.105zm19.172-4.313h-4.86v-9.706h4.86V1.882h10.52v13.876H244v9.706h-8.054v26.53h-10.52v-26.53z" fill-rule="evenodd"></path>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="SiteFooter-flexItem">
                        <div class="UIColumn UIColumn--d12 UIColumn--m6"><strong class="SiteFooter-sectionLabel">Tính năng</strong>
                            <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/vi/features/live">Quizlet Live</a></div>
                            <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/vi/features/learn">Chế độ Học</a></div>
                            <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/vi/features/diagrams">Sơ đồ</a></div>
                            <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/features/flashcards">Thẻ ghi nhớ</a></div>
                            <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/vi/mobile">Ứng dụng</a></div>
                        </div>
                    </div>
                    <div class="SiteFooter-flexItem">
                        <div class="UIColumn UIColumn--d12 UIColumn--m6"><strong class="SiteFooter-sectionLabel">Hỗ trợ</strong>
                            <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/sign-up?signupOrigin=global-footer" data-sourcename="global-footer">Đăng ký</a></div>
                            <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/vi/help">Trung tâm Hỗ trợ</a></div>
                            <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/vi/honor-code">Quy tắc danh dự</a></div>
                            <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/vi/guidelines">Nguyên tắc cộng đồng</a></div>
                            <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/vi/students">Học sinh</a></div>
                            <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/vi/teachers">Giáo viên</a></div>
                        </div>
                    </div>
                    <div class="SiteFooter-flexItem">
                        <div class="UIColumn UIColumn--d12 UIColumn--m6">
                            <div class="UIRow">
                                <div class="SiteFooter-section SiteFooter-socialLinks"><strong class="SiteFooter-sectionLabel">Giới thiệu</strong>
                                    <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/vi/mission">Công ty</a></div>
                                    <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/press">Báo chí</a></div>
                                    <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/jobs">Việc làm</a></div>
                                    <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="mailto:advertising@quizlet.com" onclick="if(window.logPageAction){window.logPageAction('Advertise_clicks');}">Quảng cáo</a></div>
                                    <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/privacy">Quyền riêng tư<svg class="UIIcon UIIcon--shield PrivacyIcon UIIcon--large"><noscript></noscript><use xlink:href="#shield"></use><noscript></noscript></svg><script>QWait('Quizlet.IconContainer',function(){Quizlet.IconContainer.loadIcon("shield")})</script></a></div>
                                    <div class="SiteFooter-sectionLink"><a class="UILink UILink--inverted" href="/vi/tos">Điều khoản dịch vụ</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="SiteFooter-flexItem">
                        <div class="UIColumn UIColumn--d12 UIColumn--m6">
                            <div class="SiteFooter-flexRightInfoContainer">
                                <div class="SiteFooter-flexRightInfoItem">
                                    <div class="UIRow">
                                        <div class="SiteFooter-section SiteFooter-socialLinks">
                                            <div class="UIColumn UIColumn--d12 UIColumn--m3"><strong class="SiteFooter-sectionLabel">Theo dõi chúng tôi</strong>
                                                <div class="SiteFooter-sectionLink"><span class="UIIconButton"><a class="UIButton UIButton--inverted" role="button" href="https://twitter.com/quizlet"><span class="UIButton-wrapper"><svg class="UIIcon UIIcon--twitter"><noscript></noscript><use xlink:href="#twitter"></use><noscript></noscript></svg><script>QWait('Quizlet.IconContainer',function(){Quizlet.IconContainer.loadIcon("twitter")})</script></span></a>
                                                        </span><span class="UIIconButton"><a class="UIButton UIButton--inverted" role="button" href="https://www.facebook.com/quizlet"><span class="UIButton-wrapper"><svg class="UIIcon UIIcon--facebook"><noscript></noscript><use xlink:href="#facebook"></use><noscript></noscript></svg><script>QWait('Quizlet.IconContainer',function(){Quizlet.IconContainer.loadIcon("facebook")})</script></span></a>
                                                        </span><span class="UIIconButton"><a class="UIButton UIButton--inverted" role="button" href="https://www.instagram.com/quizlet/"><span class="UIButton-wrapper"><svg class="UIIcon UIIcon--instagram"><noscript></noscript><use xlink:href="#instagram"></use><noscript></noscript></svg><script>QWait('Quizlet.IconContainer',function(){Quizlet.IconContainer.loadIcon("instagram")})</script></span></a>
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="SiteFooter-flexRightInfoItem SiteFooter-localeItem">
                                    <div class="UIRow">
                                        <div class="SiteFooter-localeChooser"><strong class="SiteFooter-sectionLabel">Ngôn ngữ</strong>
                                            <form action="/settings/change-locale-preference" method="post">
                                                <div class="UIDropdown UIDropdown--inverted UIDropdown--fill">
                                                    <select class="UIDropdown-select" name="localePreference" onchange="this.form.submit()">
                                                        <option value="de">Deutsch</option>
                                                        <option value="en-gb">English (UK)</option>
                                                        <option value="en-us">English (USA)</option>
                                                        <option value="es">Español</option>
                                                        <option value="fr-fr">Français (FR)</option>
                                                        <option value="fr-ca">Français (QC/CA)</option>
                                                        <option value="id">Bahasa Indonesia</option>
                                                        <option value="it">Italiano</option>
                                                        <option value="nl">Nederlands</option>
                                                        <option value="pl">polski</option>
                                                        <option value="pt-br">Português (BR)</option>
                                                        <option value="ru">Русский</option>
                                                        <option value="tr">Türkçe</option>
                                                        <option selected value="vi">Tiếng Việt</option>
                                                        <option value="ko">한국어</option>
                                                        <option value="zh-cn">中文 (简体)</option>
                                                        <option value="zh-tw">中文 (繁體)</option>
                                                        <option value="ja">日本語</option>
                                                    </select>
                                                    <svg class="UIIcon UIIcon--chevron-down UIDropdown-icon">
                                                        <noscript></noscript>
                                                        <use xlink:href="#chevron-down"></use>
                                                        <noscript></noscript>
                                                    </svg>
                                                    <script>
                                                        QWait('Quizlet.IconContainer', function() {
                                                            Quizlet.IconContainer.loadIcon("chevron-down")
                                                        })
                                                    </script>
                                                </div>
                                                <input name="cstoken" type="hidden" value="aF7DGz3mRsVuk3ucYQXZHQ">
                                                <input name="redir" type="hidden" value="/goodbye">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="UIRow">
                <div class="SiteFooter-copyright">© <span itemprop="copyrightYear">2018</span> Quizlet Inc.</div>
            </div>
        </div>
    </footer>
    <script>
        (function() {
            var analyticsData = {
                "locale": "vi",
                "abTests": "RemoveJSPageLoad:control,SetPageBranchIoAppBanner_20180822:experiment",
                "loginSource": "",
                "isLoggedIn": false,
                "selfIdentifiedUserType": "unknown",
                "userUpgradeType": "free-anonymous",
                "isVerifiedCreator": false,
                "uid": "-3395576602222604931",
                "userId": null,
                "siteVersion": 12694
            };
            analyticsData.path = Quizlet.actionString;
            analyticsData.event = 'dataLayer-initialized';
            window.dataLayer = [analyticsData, {
                'gtm.start': Date.now(),
                event: 'gtm.js'
            }];
        })();
    </script>
    <script async defer src="https://www.googletagmanager.com/gtm.js?id=GTM-5GTSWTM" onerror=""></script>
</div>
</body>

</html>