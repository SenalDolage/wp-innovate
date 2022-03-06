module.exports = {
  "entry": {
    "app": {
      "import": [
        "@roots/bud-server/client/index.js?name=bud&path=/__bud/hmr",
        "@roots/bud-server/client/proxy-click-interceptor.js",
        "@scripts/app",
        "@styles/app"
      ]
    },
    "editor": {
      "import": [
        "@roots/bud-server/client/index.js?name=bud&path=/__bud/hmr",
        "@roots/bud-server/client/proxy-click-interceptor.js",
        "@scripts/editor",
        "@styles/editor"
      ]
    }
  },
  "plugins": [
    {
      "dangerouslyAllowCleanPatternsOutsideProject": false,
      "dry": false,
      "verbose": false,
      "cleanStaleWebpackAssets": true,
      "protectWebpackAssets": true,
      "cleanAfterEveryBuildPatterns": [],
      "cleanOnceBeforeBuildPatterns": [
        "**/*",
        "!dll"
      ],
      "currentAssets": [],
      "initialClean": false,
      "outputPath": ""
    },
    {
      "patterns": [
        {
          "from": "images\\**\\*",
          "context": "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\src",
          "noErrorOnMissing": true
        }
      ],
      "options": {}
    },
    {
      "options": {}
    },
    {
      "options": {
        "basePath": "",
        "fileName": "manifest.json",
        "filter": null,
        "map": null,
        "publicPath": "",
        "removeKeyHash": {},
        "sort": null,
        "transformExtensions": {},
        "useEntryKeys": false,
        "useLegacyEmit": false,
        "writeToFileEmit": true
      }
    }
  ],
  "resolve": {
    "alias": {},
    "extensions": [
      ".wasm",
      ".mjs",
      ".js",
      ".jsx",
      ".css",
      ".json",
      ".json5",
      ".toml",
      ".xml",
      ".csv",
      ".yml",
      ".yaml",
      ".xml"
    ],
    "modules": [
      "src",
      "node_modules",
      ""
    ]
  },
  "bail": true,
  "cache": {
    "type": "filesystem",
    "version": "cxitue_igoz2plj2med6egxvjai_",
    "cacheDirectory": "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\.budfiles\\cache\\webpack",
    "managedPaths": [
      "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\node_modules"
    ],
    "buildDependencies": {
      "bud": [
        "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\package.json",
        "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\bud.config.js"
      ]
    }
  },
  "context": "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme",
  "devtool": false,
  "infrastructureLogging": {
    "console": false
  },
  "mode": "development",
  "module": {
    "rules": [
      {
        "test": {},
        "parser": {
          "requireEnsure": false
        }
      },
      {
        "oneOf": [
          {
            "test": {},
            "use": [],
            "include": [
              "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\src"
            ]
          },
          {
            "test": {},
            "use": [
              {
                "loader": "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\node_modules\\style-loader\\dist\\cjs.js"
              },
              {
                "loader": "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\node_modules\\css-loader\\dist\\cjs.js",
                "options": {
                  "importLoaders": 1,
                  "sourceMap": false
                }
              }
            ],
            "include": [
              "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\src"
            ]
          },
          {
            "test": {},
            "use": [
              {
                "loader": "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\node_modules\\style-loader\\dist\\cjs.js"
              },
              {
                "loader": "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\node_modules\\css-loader\\dist\\cjs.js",
                "options": {
                  "importLoaders": 1,
                  "localIdentName": "[name]__[local]___[hash:base64:5]",
                  "modules": true,
                  "sourceMap": false
                }
              }
            ],
            "include": [
              "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\src"
            ]
          },
          {
            "test": {},
            "include": [
              "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\src"
            ],
            "type": "asset/resource",
            "generator": {
              "filename": "images/[name][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\src"
            ],
            "type": "asset/resource",
            "generator": {
              "filename": "images/[name][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\src"
            ],
            "type": "asset/resource",
            "generator": {
              "filename": "svg/[name][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\src"
            ],
            "type": "asset",
            "generator": {
              "filename": "fonts/[name][ext]"
            }
          },
          {
            "test": {},
            "include": [
              "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\src"
            ],
            "type": "json",
            "parser": {}
          },
          {
            "test": {},
            "include": [
              "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\src"
            ],
            "type": "json",
            "parser": {}
          },
          {
            "test": {},
            "use": [
              {
                "loader": "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\node_modules\\html-loader\\dist\\cjs.js"
              }
            ],
            "include": [
              "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\src"
            ]
          },
          {
            "test": {},
            "use": [
              {
                "loader": "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\node_modules\\csv-loader\\index.js"
              }
            ],
            "include": [
              "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\src"
            ]
          },
          {
            "test": {},
            "use": [
              {
                "loader": "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\node_modules\\xml-loader\\index.js"
              }
            ],
            "include": [
              "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\src"
            ]
          },
          {
            "test": {},
            "include": [
              "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\src"
            ],
            "type": "json",
            "parser": {}
          }
        ]
      }
    ],
    "unsafeCache": false
  },
  "name": "bud",
  "node": false,
  "output": {
    "assetModuleFilename": "[name][ext]",
    "chunkFilename": "[name].js",
    "filename": "[name].js",
    "path": "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\dist",
    "pathinfo": false,
    "publicPath": "auto"
  },
  "optimization": {
    "emitOnErrors": false,
    "minimize": false,
    "minimizer": [
      "..."
    ],
    "runtimeChunk": false
  },
  "parallelism": 7,
  "performance": {
    "hints": false
  },
  "recordsPath": "C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\.budfiles\\bud\\modules.json",
  "stats": {
    "preset": "normal"
  },
  "target": "browserslist:C:\\xampp\\htdocs\\innovate\\wp-content\\themes\\sage-theme\\package.json"
}