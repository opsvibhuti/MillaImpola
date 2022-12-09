<?php

namespace App\Helpers;

class Helper
{
    public static function errorPage()
    {
        $erorrPage = '{
                        "pageType": "ErrorPage",
                        "pageTitle": "404 Error Page",
                        "metadata": null,
                        "header": null,
                        "hero": null,
                        "blocks": null,
                        "contentElement": null,
                        "footer": null,
                        "content": {
                            "value": "",
                            "checksum": 0,
                            "imageUrlMappings": []
                        },
                        "excerpt": {
                            "value": "",
                            "checksum": 0
                        },
                        "categories": [
                            {
                                "id": 1,
                                "name": "Uncategorized",
                                "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/category\/uncategorized\/"
                            }
                        ],
                        "id": 492,
                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=492&action=edit",
                        "values": [],
                        "linkTree": []
                    }';
        $obj = json_decode($erorrPage);
        return $obj;

    }

    public static function componets()
    {
        $allComponets = '[
                            {
                                "contentElement": {
                                    "ID": 10,
                                    "name": "Primary Global Menu",
                                    "slug": "primary-global-menu",
                                    "description": "",
                                    "count": 19,
                                    "items": [
                                        {
                                            "id": 84,
                                            "order": 1,
                                            "parent": 0,
                                            "title": "About Us",
                                            "url": "\/about-us",
                                            "attr": "",
                                            "target": "",
                                            "classes": "",
                                            "xfn": "",
                                            "description": "",
                                            "object_id": 84,
                                            "object": "custom",
                                            "object_slug": "about-us",
                                            "type": "custom",
                                            "type_label": "Custom Link",
                                            "children": [
                                                {
                                                    "id": 85,
                                                    "order": 2,
                                                    "parent": 84,
                                                    "title": "Sustainability",
                                                    "url": "\/sustainability",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 85,
                                                    "object": "custom",
                                                    "object_slug": "sustainability",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 86,
                                                    "order": 3,
                                                    "parent": 84,
                                                    "title": "Press",
                                                    "url": "\/press-about-one-condoms",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 86,
                                                    "object": "custom",
                                                    "object_slug": "press",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 87,
                                                    "order": 4,
                                                    "parent": 84,
                                                    "title": "Contact",
                                                    "url": "\/contact-us",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 87,
                                                    "object": "custom",
                                                    "object_slug": "contact",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 88,
                                                    "order": 5,
                                                    "parent": 84,
                                                    "title": "Careers",
                                                    "url": "\/work-at-one",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 88,
                                                    "object": "custom",
                                                    "object_slug": "careers",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                }
                                            ]
                                        },
                                        {
                                            "id": 89,
                                            "order": 6,
                                            "parent": 0,
                                            "title": "Shop",
                                            "url": "\/collections\/all",
                                            "attr": "",
                                            "target": "",
                                            "classes": "",
                                            "xfn": "",
                                            "description": "",
                                            "object_id": 89,
                                            "object": "custom",
                                            "object_slug": "shop",
                                            "type": "custom",
                                            "type_label": "Custom Link",
                                            "children": [
                                                {
                                                    "id": 345,
                                                    "order": 7,
                                                    "parent": 89,
                                                    "title": "Full Catalog",
                                                    "url": "\/catalog",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 345,
                                                    "object": "custom",
                                                    "object_slug": "full-catalog",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 90,
                                                    "order": 8,
                                                    "parent": 89,
                                                    "title": "Condoms",
                                                    "url": "\/our-selection-of-condoms",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 90,
                                                    "object": "custom",
                                                    "object_slug": "condoms",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 91,
                                                    "order": 9,
                                                    "parent": 89,
                                                    "title": "Lubricant",
                                                    "url": "\/personal-lubricant",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 91,
                                                    "object": "custom",
                                                    "object_slug": "lubricant",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 92,
                                                    "order": 10,
                                                    "parent": 89,
                                                    "title": "Bundles",
                                                    "url": "\/product-bundles",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 92,
                                                    "object": "custom",
                                                    "object_slug": "bundles",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 93,
                                                    "order": 11,
                                                    "parent": 89,
                                                    "title": "myONE Perfect Fit\u00ae",
                                                    "url": "\/myone-perfect-fit",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 93,
                                                    "object": "custom",
                                                    "object_slug": "myone-perfect-fit",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                }
                                            ]
                                        },
                                        {
                                            "id": 94,
                                            "order": 12,
                                            "parent": 0,
                                            "title": "Community",
                                            "url": "\/pages\/community",
                                            "attr": "",
                                            "target": "",
                                            "classes": "",
                                            "xfn": "",
                                            "description": "",
                                            "object_id": 94,
                                            "object": "custom",
                                            "object_slug": "community",
                                            "type": "custom",
                                            "type_label": "Custom Link",
                                            "children": [
                                                {
                                                    "id": 95,
                                                    "order": 13,
                                                    "parent": 94,
                                                    "title": "Sex Ed Blog",
                                                    "url": "\/sexual-health-education",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 95,
                                                    "object": "custom",
                                                    "object_slug": "sex-ed-blog",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 96,
                                                    "order": 14,
                                                    "parent": 94,
                                                    "title": "Community Stories",
                                                    "url": "\/community-stories",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 96,
                                                    "object": "custom",
                                                    "object_slug": "community-stories",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 97,
                                                    "order": 15,
                                                    "parent": 94,
                                                    "title": "Partnerships",
                                                    "url": "\/donations-partnerships-with-one-condoms",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 97,
                                                    "object": "custom",
                                                    "object_slug": "partnerships",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 98,
                                                    "order": 16,
                                                    "parent": 94,
                                                    "title": "Project Condom",
                                                    "url": "\/project-condom",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 98,
                                                    "object": "custom",
                                                    "object_slug": "project-condom",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                }
                                            ]
                                        },
                                        {
                                            "id": 99,
                                            "order": 17,
                                            "parent": 0,
                                            "title": "Art of ONE",
                                            "url": "\/pages\/art-of-one",
                                            "attr": "",
                                            "target": "",
                                            "classes": "",
                                            "xfn": "",
                                            "description": "",
                                            "object_id": 99,
                                            "object": "custom",
                                            "object_slug": "art-of-one",
                                            "type": "custom",
                                            "type_label": "Custom Link",
                                            "children": [
                                                {
                                                    "id": 158,
                                                    "order": 18,
                                                    "parent": 99,
                                                    "title": "Art of ONE",
                                                    "url": "\/art-of-one",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 158,
                                                    "object": "custom",
                                                    "object_slug": "art-of-one-2",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 100,
                                                    "order": 19,
                                                    "parent": 99,
                                                    "title": "ONE Design Contest",
                                                    "url": "\/one-design-contest",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 100,
                                                    "object": "custom",
                                                    "object_slug": "one-design-contest",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                }
                                            ]
                                        }
                                    ],
                                    "meta": {
                                        "links": {
                                            "collection": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/menus\/",
                                            "self": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/menus\/10"
                                        }
                                    }
                                }
                            },
                            {
                                "contentElement": {
                                    "ID": 11,
                                    "name": "Footer Menu",
                                    "slug": "footer-menu",
                                    "description": "",
                                    "count": 7,
                                    "items": [
                                        {
                                            "id": 101,
                                            "order": 1,
                                            "parent": 0,
                                            "title": "Where to Buy",
                                            "url": "\/where-to-buy",
                                            "attr": "",
                                            "target": "",
                                            "classes": "",
                                            "xfn": "",
                                            "description": "",
                                            "object_id": 101,
                                            "object": "custom",
                                            "object_slug": "where-to-buy",
                                            "type": "custom",
                                            "type_label": "Custom Link"
                                        },
                                        {
                                            "id": 102,
                                            "order": 2,
                                            "parent": 0,
                                            "title": "Returns & Exchanges",
                                            "url": "\/returns-exchanges",
                                            "attr": "",
                                            "target": "",
                                            "classes": "",
                                            "xfn": "",
                                            "description": "",
                                            "object_id": 102,
                                            "object": "custom",
                                            "object_slug": "returns-exchanges",
                                            "type": "custom",
                                            "type_label": "Custom Link"
                                        },
                                        {
                                            "id": 103,
                                            "order": 3,
                                            "parent": 0,
                                            "title": "Influencers & Affiliates",
                                            "url": "\/pages\/influencers",
                                            "attr": "",
                                            "target": "",
                                            "classes": "",
                                            "xfn": "",
                                            "description": "",
                                            "object_id": 103,
                                            "object": "custom",
                                            "object_slug": "influencers-affiliates",
                                            "type": "custom",
                                            "type_label": "Custom Link"
                                        },
                                        {
                                            "id": 104,
                                            "order": 4,
                                            "parent": 0,
                                            "title": "Privacy & Security",
                                            "url": "\/data-retention-and-privacy-policy",
                                            "attr": "",
                                            "target": "",
                                            "classes": "",
                                            "xfn": "",
                                            "description": "",
                                            "object_id": 104,
                                            "object": "custom",
                                            "object_slug": "privacy-security",
                                            "type": "custom",
                                            "type_label": "Custom Link"
                                        },
                                        {
                                            "id": 105,
                                            "order": 5,
                                            "parent": 0,
                                            "title": "Wholesale & Non-Profit Sales",
                                            "url": "\/non-profit-and-wholesale-purchases",
                                            "attr": "",
                                            "target": "",
                                            "classes": "",
                                            "xfn": "",
                                            "description": "",
                                            "object_id": 105,
                                            "object": "custom",
                                            "object_slug": "wholesale-non-profit-sales",
                                            "type": "custom",
                                            "type_label": "Custom Link"
                                        },
                                        {
                                            "id": 106,
                                            "order": 6,
                                            "parent": 0,
                                            "title": "Contact Us",
                                            "url": "\/pages\/contact",
                                            "attr": "",
                                            "target": "",
                                            "classes": "",
                                            "xfn": "",
                                            "description": "",
                                            "object_id": 106,
                                            "object": "custom",
                                            "object_slug": "contact-us",
                                            "type": "custom",
                                            "type_label": "Custom Link"
                                        },
                                        {
                                            "id": 107,
                                            "order": 7,
                                            "parent": 0,
                                            "title": "FAQs",
                                            "url": "\/faq",
                                            "attr": "",
                                            "target": "",
                                            "classes": "",
                                            "xfn": "",
                                            "description": "",
                                            "object_id": 107,
                                            "object": "custom",
                                            "object_slug": "faqs",
                                            "type": "custom",
                                            "type_label": "Custom Link"
                                        }
                                    ],
                                    "meta": {
                                        "links": {
                                            "collection": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/menus\/",
                                            "self": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/menus\/11"
                                        }
                                    }
                                }
                            },
                            {
                                "contentElement": {
                                    "ID": 10,
                                    "name": "Primary Global Menu",
                                    "slug": "primary-global-menu",
                                    "description": "",
                                    "count": 19,
                                    "items": [
                                        {
                                            "id": 84,
                                            "order": 1,
                                            "parent": 0,
                                            "title": "About Us",
                                            "url": "\/about-us",
                                            "attr": "",
                                            "target": "",
                                            "classes": "",
                                            "xfn": "",
                                            "description": "",
                                            "object_id": 84,
                                            "object": "custom",
                                            "object_slug": "about-us",
                                            "type": "custom",
                                            "type_label": "Custom Link",
                                            "children": [
                                                {
                                                    "id": 85,
                                                    "order": 2,
                                                    "parent": 84,
                                                    "title": "Sustainability",
                                                    "url": "\/sustainability",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 85,
                                                    "object": "custom",
                                                    "object_slug": "sustainability",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 86,
                                                    "order": 3,
                                                    "parent": 84,
                                                    "title": "Press",
                                                    "url": "\/press-about-one-condoms",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 86,
                                                    "object": "custom",
                                                    "object_slug": "press",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 87,
                                                    "order": 4,
                                                    "parent": 84,
                                                    "title": "Contact",
                                                    "url": "\/contact-us",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 87,
                                                    "object": "custom",
                                                    "object_slug": "contact",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 88,
                                                    "order": 5,
                                                    "parent": 84,
                                                    "title": "Careers",
                                                    "url": "\/work-at-one",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 88,
                                                    "object": "custom",
                                                    "object_slug": "careers",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                }
                                            ]
                                        },
                                        {
                                            "id": 89,
                                            "order": 6,
                                            "parent": 0,
                                            "title": "Shop",
                                            "url": "\/collections\/all",
                                            "attr": "",
                                            "target": "",
                                            "classes": "",
                                            "xfn": "",
                                            "description": "",
                                            "object_id": 89,
                                            "object": "custom",
                                            "object_slug": "shop",
                                            "type": "custom",
                                            "type_label": "Custom Link",
                                            "children": [
                                                {
                                                    "id": 345,
                                                    "order": 7,
                                                    "parent": 89,
                                                    "title": "Full Catalog",
                                                    "url": "\/catalog",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 345,
                                                    "object": "custom",
                                                    "object_slug": "full-catalog",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 90,
                                                    "order": 8,
                                                    "parent": 89,
                                                    "title": "Condoms",
                                                    "url": "\/our-selection-of-condoms",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 90,
                                                    "object": "custom",
                                                    "object_slug": "condoms",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 91,
                                                    "order": 9,
                                                    "parent": 89,
                                                    "title": "Lubricant",
                                                    "url": "\/personal-lubricant",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 91,
                                                    "object": "custom",
                                                    "object_slug": "lubricant",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 92,
                                                    "order": 10,
                                                    "parent": 89,
                                                    "title": "Bundles",
                                                    "url": "\/product-bundles",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 92,
                                                    "object": "custom",
                                                    "object_slug": "bundles",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 93,
                                                    "order": 11,
                                                    "parent": 89,
                                                    "title": "myONE Perfect Fit\u00ae",
                                                    "url": "\/myone-perfect-fit",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 93,
                                                    "object": "custom",
                                                    "object_slug": "myone-perfect-fit",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                }
                                            ]
                                        },
                                        {
                                            "id": 94,
                                            "order": 12,
                                            "parent": 0,
                                            "title": "Community",
                                            "url": "\/pages\/community",
                                            "attr": "",
                                            "target": "",
                                            "classes": "",
                                            "xfn": "",
                                            "description": "",
                                            "object_id": 94,
                                            "object": "custom",
                                            "object_slug": "community",
                                            "type": "custom",
                                            "type_label": "Custom Link",
                                            "children": [
                                                {
                                                    "id": 95,
                                                    "order": 13,
                                                    "parent": 94,
                                                    "title": "Sex Ed Blog",
                                                    "url": "\/sexual-health-education",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 95,
                                                    "object": "custom",
                                                    "object_slug": "sex-ed-blog",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 96,
                                                    "order": 14,
                                                    "parent": 94,
                                                    "title": "Community Stories",
                                                    "url": "\/community-stories",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 96,
                                                    "object": "custom",
                                                    "object_slug": "community-stories",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 97,
                                                    "order": 15,
                                                    "parent": 94,
                                                    "title": "Partnerships",
                                                    "url": "\/donations-partnerships-with-one-condoms",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 97,
                                                    "object": "custom",
                                                    "object_slug": "partnerships",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 98,
                                                    "order": 16,
                                                    "parent": 94,
                                                    "title": "Project Condom",
                                                    "url": "\/project-condom",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 98,
                                                    "object": "custom",
                                                    "object_slug": "project-condom",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                }
                                            ]
                                        },
                                        {
                                            "id": 99,
                                            "order": 17,
                                            "parent": 0,
                                            "title": "Art of ONE",
                                            "url": "\/pages\/art-of-one",
                                            "attr": "",
                                            "target": "",
                                            "classes": "",
                                            "xfn": "",
                                            "description": "",
                                            "object_id": 99,
                                            "object": "custom",
                                            "object_slug": "art-of-one",
                                            "type": "custom",
                                            "type_label": "Custom Link",
                                            "children": [
                                                {
                                                    "id": 158,
                                                    "order": 18,
                                                    "parent": 99,
                                                    "title": "Art of ONE",
                                                    "url": "\/art-of-one",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 158,
                                                    "object": "custom",
                                                    "object_slug": "art-of-one-2",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                },
                                                {
                                                    "id": 100,
                                                    "order": 19,
                                                    "parent": 99,
                                                    "title": "ONE Design Contest",
                                                    "url": "\/one-design-contest",
                                                    "attr": "",
                                                    "target": "",
                                                    "classes": "",
                                                    "xfn": "",
                                                    "description": "",
                                                    "object_id": 100,
                                                    "object": "custom",
                                                    "object_slug": "one-design-contest",
                                                    "type": "custom",
                                                    "type_label": "Custom Link"
                                                }
                                            ]
                                        }
                                    ],
                                    "meta": {
                                        "links": {
                                            "collection": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/menus\/",
                                            "self": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/menus\/10"
                                        }
                                    }
                                }
                            },
                            {
                                "contentElement": {
                                    "id": 242,
                                    "date": "2022-04-30T00:25:04",
                                    "date_gmt": "2022-04-30T00:25:04",
                                    "guid": {
                                        "rendered": "https:\/\/gpg-staging-wordpress.onecondoms.com\/?p=242"
                                    },
                                    "modified": "2022-09-29T10:16:43",
                                    "modified_gmt": "2022-09-29T10:16:43",
                                    "slug": "home-page-20220403",
                                    "status": "publish",
                                    "type": "post",
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/home-page-20220403\/",
                                    "title": {
                                        "rendered": "Home Page | 20220403"
                                    },
                                    "content": {
                                        "rendered": "<p>Hello world!<\/p>\n",
                                        "protected": false
                                    },
                                    "excerpt": {
                                        "rendered": "<p>Hello world!<\/p>\n",
                                        "protected": false
                                    },
                                    "author": 4,
                                    "featured_media": 0,
                                    "comment_status": "closed",
                                    "ping_status": "closed",
                                    "sticky": false,
                                    "template": "",
                                    "format": "standard",
                                    "meta": [],
                                    "categories": [
                                        19,
                                        1
                                    ],
                                    "tags": [],
                                    "block_1": "",
                                    "block_10": "",
                                    "block_11": "",
                                    "block_12": "",
                                    "block_2": "",
                                    "block_3": "",
                                    "block_4": "",
                                    "block_5": "",
                                    "block_6": "",
                                    "block_7": "",
                                    "block_8": "",
                                    "block_9": "",
                                    "block_element": "337",
                                    "condition": "",
                                    "content_element": "474",
                                    "creator_origin": "",
                                    "currency_denom": "",
                                    "flex_block_1": "",
                                    "flex_block_2": "",
                                    "flex_block_3": "",
                                    "form_id": "",
                                    "goo_age": "",
                                    "goo_category": "",
                                    "goo_color": "",
                                    "goo_gender": "",
                                    "goo_material": "",
                                    "goo_priceunit": "",
                                    "hero_element": "335",
                                    "localized_direction": "",
                                    "menu_1": "",
                                    "menu_2": "",
                                    "meta_data": "333",
                                    "mpn_gtin": "",
                                    "page_grid": "",
                                    "page_title": "One Condoms",
                                    "page_type": "HomePage",
                                    "product_sku": "",
                                    "product_slug": "",
                                    "site_origin": "",
                                    "_edit_last": "1",
                                    "_links": {
                                        "self": [
                                            {
                                                "href": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/posts\/242"
                                            }
                                        ],
                                        "collection": [
                                            {
                                                "href": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/posts"
                                            }
                                        ],
                                        "about": [
                                            {
                                                "href": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/types\/post"
                                            }
                                        ],
                                        "author": [
                                            {
                                                "embeddable": true,
                                                "href": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/users\/4"
                                            }
                                        ],
                                        "replies": [
                                            {
                                                "embeddable": true,
                                                "href": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/comments?post=242"
                                            }
                                        ],
                                        "version-history": [
                                            {
                                                "count": 5,
                                                "href": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/posts\/242\/revisions"
                                            }
                                        ],
                                        "predecessor-version": [
                                            {
                                                "id": 450,
                                                "href": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/posts\/242\/revisions\/450"
                                            }
                                        ],
                                        "wp:attachment": [
                                            {
                                                "href": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/media?parent=242"
                                            }
                                        ],
                                        "wp:term": [
                                            {
                                                "taxonomy": "category",
                                                "embeddable": true,
                                                "href": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/categories?post=242"
                                            },
                                            {
                                                "taxonomy": "post_tag",
                                                "embeddable": true,
                                                "href": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-json\/wp\/v2\/tags?post=242"
                                            }
                                        ],
                                        "curies": [
                                            {
                                                "name": "wp",
                                                "href": "https:\/\/api.w.org\/{rel}",
                                                "templated": true
                                            }
                                        ]
                                    }
                                }
                            }
                        ]';
        $obj = json_decode($allComponets);

        return $obj;
    }
    public static function productpage()
    {
        $allDatas = '{
            "pageType": "ProductPage",
            "pageTitle": "FlavorWave Condoms",
            "metadata": {
                "id": 428,
                "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=428&action=edit",
                "content": {
                    "value": "",
                    "checksum": 0,
                    "imageUrlMappings": []
                },
                "excerpt": {
                    "value": "",
                    "checksum": 0
                },
                "values": {
                    "currency": "$",
                    "twitterSite": "@ONECondoms",
                    "twitterCreator": "@ONECondoms",
                    "googleCondition": "New",
                    "googleAgeCategory": "Adult",
                    "googleGenderCategory": "Unisex"
                }
            },
            "header": null,
            "contentElement": {
                "id": 451,
                "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=451&action=edit",
                "content": {
                    "value": "",
                    "checksum": 0,
                    "imageUrlMappings": []
                },
                "excerpt": {
                    "value": "",
                    "checksum": 0
                },
                "values": {
                    "productSku": "3816903109",
                    "twitterCard": null,
                    "twitterCardImage": null,
                    "manufacturerPartNumber": null,
                    "tags": [
                        "12-packs",
                        "flavored-condoms",
                        "condoms"
                    ],
                    "googleProductCategory": null,
                    "googleColorCategory": null,
                    "googleMaterialCategory": null,
                    "googleUnitPricingMeasure": null,
                    "productSlug": null,
                    "mediumDescription": "<h3><strong>GET YOUR FLAVOR ON!<\/strong><\/h3>\n<b>ONE\u00ae FlavorWaves\u2122<\/b><span style=\"font-weight: 400;\"> condom 12-pack contains 6 delicious flavor experiences in unique colors. Includes: Chocolate Strawberry, Island Punch, Fresh Mint, Bubblegum, Mint Chocolate, and Banana Split. Safe for intercourse and contains no sugars. All ONE\u00ae Condoms feature Sensatex\u00ae ultra-soft latex for a more natural pleasure feeling. Pack of 12 condoms.<br><\/span>",
                    "mediaCollection": [
                        {
                            "id": 87,
                            "shopifyId": 28764422013010,
                            "name": "1324200_fl1_031422.png"
                        },
                        {
                            "id": 88,
                            "shopifyId": 28316981723218,
                            "name": "Condoms_FlavorWaves_Transparent_03a19c40-051d-437d-83ad-3c2032760f67.png"
                        },
                        {
                            "id": 89,
                            "shopifyId": 28764421980242,
                            "name": "1324200_fl2_031422.png"
                        }
                    ],
                    "isVariant": false,
                    "productObject": {
                        "id": 25,
                        "uuid": "375148e4-ac77-46a5-b981-1d933dc61c7e",
                        "shopify_id": 3816903109,
                        "salesforce_product2_id": null,
                        "created_at": "2022-07-14T20:05:23.000000Z",
                        "updated_at": "2022-07-14T20:05:23.000000Z",
                        "status": false,
                        "tags": "12-packs, Flavored Condoms, Condoms",
                        "product_type": "Condoms",
                        "vendor": "ONE\u00ae",
                        "description": "<h3><strong>GET YOUR FLAVOR ON!<\/strong><\/h3>\n<b>ONE\u00ae FlavorWaves\u2122<\/b><span style=\"font-weight: 400;\"> condom 12-pack contains 6 delicious flavor experiences in unique colors. Includes: Chocolate Strawberry, Island Punch, Fresh Mint, Bubblegum, Mint Chocolate, and Banana Split. Safe for intercourse and contains no sugars. All ONE\u00ae Condoms feature Sensatex\u00ae ultra-soft latex for a more natural pleasure feeling. Pack of 12 condoms.<br><\/span>",
                        "title": "FlavorWaves Condoms",
                        "site_id": 1262
                    },
                    "productVariantObjects": [
                        {
                            "id": 150,
                            "product_id": 25,
                            "shopify_variant_id": 31357045080146,
                            "title": "12",
                            "price": "8.48",
                            "momentum_value": null,
                            "created_at": "2022-07-14T20:05:23.000000Z",
                            "updated_at": "2022-07-14T20:05:23.000000Z",
                            "sku": "110202",
                            "is_subscribable": false
                        }
                    ]
                }
            },
            "footer": null,
            "content": {
                "value": "<p>This is a long description?<\/p>\n",
                "checksum": 3660077869,
                "imageUrlMappings": []
            },
            "excerpt": {
                "value": "<p>This is a short description?<\/p>\n",
                "checksum": 3545740731
            },
            "categories": [],
            "id": 434,
            "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=434&action=edit",
            "values": {
                "longDescription": "<p>This is a long description?<\/p>\n",
                "shortDescription": "<p>This is a short description?<\/p>\n"
            },
            "linkTree": [
                {
                    "id": 428,
                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=428&action=edit",
                    "name": "Metadata",
                    "parent": null,
                    "children": []
                },
                {
                    "id": 451,
                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=451&action=edit",
                    "name": "ContentElement",
                    "parent": null,
                    "children": []
                }
            ]
        }';
        $obj = json_decode($allDatas);
        return $obj;
    }

    public static function homepage()
    {
        $HomeDatas = '{
                        "pageType": "HomePage",
                        "pageTitle": "One Condoms",
                        "metadata": {
                            "id": 333,
                            "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=333&action=edit",
                            "content": {
                                "value": "",
                                "checksum": 0,
                                "imageUrlMappings": []
                            },
                            "excerpt": {
                                "value": "",
                                "checksum": 0
                            },
                            "values": {
                                "currency": null,
                                "twitterSite": null,
                                "twitterCreator": null,
                                "googleCondition": null,
                                "googleAgeCategory": null,
                                "googleGenderCategory": null
                            }
                        },
                        "header": null,
                        "hero": {
                            "id": 335,
                            "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=335&action=edit",
                            "content": {
                                "value": "",
                                "checksum": 0,
                                "imageUrlMappings": []
                            },
                            "excerpt": {
                                "value": "",
                                "checksum": 0
                            },
                            "values": {
                                "flexBlock1": {
                                    "id": 250,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=250&action=edit",
                                    "content": {
                                        "value": "<p><a href=\"\/condoms\"><img loading=\"lazy\" class=\"alignnone size-full wp-image-436\" src=\"https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/07\/T01RHB1UED6-U03QQ47GZ1Q-2743cb4bf904-512.png\" alt=\"\" width=\"512\" height=\"512\"><\/a><\/p>\n",
                                        "checksum": 2658024819,
                                        "imageUrlMappings": [
                                            {
                                                "contentManagement": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/07\/T01RHB1UED6-U03QQ47GZ1Q-2743cb4bf904-512.png",
                                                "serviceAsset": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/07\/T01RHB1UED6-U03QQ47GZ1Q-2743cb4bf904-512.png"
                                            }
                                        ]
                                    },
                                    "excerpt": {
                                        "value": "",
                                        "checksum": 0
                                    },
                                    "values": []
                                },
                                "flexBlock2": {
                                    "id": 264,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=264&action=edit",
                                    "content": {
                                        "value": "<p><img src=\"https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/flex-block-2.png\"><\/p>\n",
                                        "checksum": 3202989595,
                                        "imageUrlMappings": [
                                            {
                                                "contentManagement": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/flex-block-2.png",
                                                "serviceAsset": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/flex-block-2.png"
                                            }
                                        ]
                                    },
                                    "excerpt": {
                                        "value": "",
                                        "checksum": 0
                                    },
                                    "values": []
                                },
                                "flexBlock3": {
                                    "id": 272,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=272&action=edit",
                                    "content": {
                                        "value": "<p><img src=\"https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/flex-block-3.png\" alt=\"An image of something\"><\/p>\n",
                                        "checksum": 224975426,
                                        "imageUrlMappings": [
                                            {
                                                "contentManagement": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/flex-block-3.png",
                                                "serviceAsset": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/flex-block-3.png"
                                            }
                                        ]
                                    },
                                    "excerpt": {
                                        "value": "",
                                        "checksum": 0
                                    },
                                    "values": []
                                }
                            }
                        },
                        "blocks": {
                            "id": 337,
                            "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=337&action=edit",
                            "content": {
                                "value": "",
                                "checksum": 0,
                                "imageUrlMappings": []
                            },
                            "excerpt": {
                                "value": "",
                                "checksum": 0
                            },
                            "values": {
                                "block1": {
                                    "id": 276,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=276&action=edit",
                                    "content": {
                                        "value": "<p><img src=\"https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-1.png\" alt=\"stuff about condoms\"><\/p>\n",
                                        "checksum": 142991285,
                                        "imageUrlMappings": [
                                            {
                                                "contentManagement": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-1.png",
                                                "serviceAsset": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-1.png"
                                            }
                                        ]
                                    },
                                    "excerpt": {
                                        "value": "",
                                        "checksum": 0
                                    },
                                    "values": []
                                },
                                "block2": {
                                    "id": 280,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=280&action=edit",
                                    "content": {
                                        "value": "<p><img src=\"https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-2.png\" alt=\"alt\"><\/p>\n",
                                        "checksum": 204647435,
                                        "imageUrlMappings": [
                                            {
                                                "contentManagement": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-2.png",
                                                "serviceAsset": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-2.png"
                                            }
                                        ]
                                    },
                                    "excerpt": {
                                        "value": "",
                                        "checksum": 0
                                    },
                                    "values": []
                                },
                                "block3": {
                                    "id": 283,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=283&action=edit",
                                    "content": {
                                        "value": "<p><img src=\"https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-3.png\" alt=\"another block\"><\/p>\n",
                                        "checksum": 3296745895,
                                        "imageUrlMappings": [
                                            {
                                                "contentManagement": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-3.png",
                                                "serviceAsset": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-3.png"
                                            }
                                        ]
                                    },
                                    "excerpt": {
                                        "value": "",
                                        "checksum": 0
                                    },
                                    "values": []
                                },
                                "block5": {
                                    "id": 289,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=289&action=edit",
                                    "content": {
                                        "value": "<p><img src=\"https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-6.png\" alt=\"block 6\"><\/p>\n",
                                        "checksum": 786380490,
                                        "imageUrlMappings": [
                                            {
                                                "contentManagement": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-6.png",
                                                "serviceAsset": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-6.png"
                                            }
                                        ]
                                    },
                                    "excerpt": {
                                        "value": "",
                                        "checksum": 0
                                    },
                                    "values": []
                                },
                                "block6": {
                                    "id": 292,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=292&action=edit",
                                    "content": {
                                        "value": "<p><img src=\"https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-6-1.png\" alt=\"block 6\"><\/p>\n",
                                        "checksum": 1431465991,
                                        "imageUrlMappings": [
                                            {
                                                "contentManagement": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-6-1.png",
                                                "serviceAsset": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-6-1.png"
                                            }
                                        ]
                                    },
                                    "excerpt": {
                                        "value": "",
                                        "checksum": 0
                                    },
                                    "values": []
                                },
                                "block7": {
                                    "id": 295,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=295&action=edit",
                                    "content": {
                                        "value": "<p><img src=\"https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-7.png\" alt=\"block 7\"><\/p>\n",
                                        "checksum": 3232276713,
                                        "imageUrlMappings": [
                                            {
                                                "contentManagement": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-7.png",
                                                "serviceAsset": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-7.png"
                                            }
                                        ]
                                    },
                                    "excerpt": {
                                        "value": "",
                                        "checksum": 0
                                    },
                                    "values": []
                                },
                                "block8": {
                                    "id": 298,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=298&action=edit",
                                    "content": {
                                        "value": "<p><img src=\"https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-8.png\" alt=\"block 8\"><\/p>\n",
                                        "checksum": 939909343,
                                        "imageUrlMappings": [
                                            {
                                                "contentManagement": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-8.png",
                                                "serviceAsset": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-8.png"
                                            }
                                        ]
                                    },
                                    "excerpt": {
                                        "value": "",
                                        "checksum": 0
                                    },
                                    "values": []
                                },
                                "block9": {
                                    "id": 301,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=301&action=edit",
                                    "content": {
                                        "value": "<p><img src=\"https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-9.png\" alt=\"block 9\"><\/p>\n",
                                        "checksum": 3597825788,
                                        "imageUrlMappings": [
                                            {
                                                "contentManagement": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-9.png",
                                                "serviceAsset": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-9.png"
                                            }
                                        ]
                                    },
                                    "excerpt": {
                                        "value": "",
                                        "checksum": 0
                                    },
                                    "values": []
                                },
                                "block10": {
                                    "id": 295,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=295&action=edit",
                                    "content": {
                                        "value": "<p><img src=\"https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-7.png\" alt=\"block 7\"><\/p>\n",
                                        "checksum": 3232276713,
                                        "imageUrlMappings": [
                                            {
                                                "contentManagement": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-7.png",
                                                "serviceAsset": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-7.png"
                                            }
                                        ]
                                    },
                                    "excerpt": {
                                        "value": "",
                                        "checksum": 0
                                    },
                                    "values": []
                                },
                                "block11": {
                                    "id": 298,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=298&action=edit",
                                    "content": {
                                        "value": "<p><img src=\"https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-8.png\" alt=\"block 8\"><\/p>\n",
                                        "checksum": 939909343,
                                        "imageUrlMappings": [
                                            {
                                                "contentManagement": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-8.png",
                                                "serviceAsset": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-8.png"
                                            }
                                        ]
                                    },
                                    "excerpt": {
                                        "value": "",
                                        "checksum": 0
                                    },
                                    "values": []
                                },
                                "block12": {
                                    "id": 301,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=301&action=edit",
                                    "content": {
                                        "value": "<p><img src=\"https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-9.png\" alt=\"block 9\"><\/p>\n",
                                        "checksum": 3597825788,
                                        "imageUrlMappings": [
                                            {
                                                "contentManagement": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-9.png",
                                                "serviceAsset": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-content\/uploads\/2022\/05\/block-9.png"
                                            }
                                        ]
                                    },
                                    "excerpt": {
                                        "value": "",
                                        "checksum": 0
                                    },
                                    "values": []
                                }
                            }
                        },
                        "contentElement": {
                            "id": 474,
                            "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=474&action=edit",
                            "content": {
                                "value": "",
                                "checksum": 0,
                                "imageUrlMappings": []
                            },
                            "excerpt": {
                                "value": "",
                                "checksum": 0
                            },
                            "values": []
                        },
                        "footer": null,
                        "content": {
                            "value": "<p>Hello world!<\/p>\n",
                            "checksum": 676126247,
                            "imageUrlMappings": []
                        },
                        "excerpt": {
                            "value": "<p>Hello world!<\/p>\n",
                            "checksum": 676126247
                        },
                        "categories": [
                            {
                                "id": 19,
                                "name": "Structure",
                                "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/category\/structure\/"
                            },
                            {
                                "id": 1,
                                "name": "Uncategorized",
                                "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/category\/uncategorized\/"
                            }
                        ],
                        "id": 242,
                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=242&action=edit",
                        "values": [],
                        "linkTree": [
                            {
                                "id": 333,
                                "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=333&action=edit",
                                "name": "Metadata",
                                "parent": null,
                                "children": []
                            },
                            {
                                "id": 335,
                                "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=335&action=edit",
                                "name": "Hero",
                                "parent": null,
                                "children": [
                                    {
                                        "id": 250,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=250&action=edit",
                                        "name": "FlexBlock1",
                                        "parent": "Hero",
                                        "children": []
                                    },
                                    {
                                        "id": 264,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=264&action=edit",
                                        "name": "FlexBlock2",
                                        "parent": "Hero",
                                        "children": []
                                    },
                                    {
                                        "id": 272,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=272&action=edit",
                                        "name": "FlexBlock3",
                                        "parent": "Hero",
                                        "children": []
                                    }
                                ]
                            },
                            {
                                "id": 337,
                                "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=337&action=edit",
                                "name": "Blocks",
                                "parent": null,
                                "children": [
                                    {
                                        "id": 276,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=276&action=edit",
                                        "name": "Block1",
                                        "parent": "Blocks",
                                        "children": []
                                    },
                                    {
                                        "id": 280,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=280&action=edit",
                                        "name": "Block2",
                                        "parent": "Blocks",
                                        "children": []
                                    },
                                    {
                                        "id": 283,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=283&action=edit",
                                        "name": "Block3",
                                        "parent": "Blocks",
                                        "children": []
                                    },
                                    {
                                        "id": 289,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=289&action=edit",
                                        "name": "Block5",
                                        "parent": "Blocks",
                                        "children": []
                                    },
                                    {
                                        "id": 292,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=292&action=edit",
                                        "name": "Block6",
                                        "parent": "Blocks",
                                        "children": []
                                    },
                                    {
                                        "id": 295,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=295&action=edit",
                                        "name": "Block7",
                                        "parent": "Blocks",
                                        "children": []
                                    },
                                    {
                                        "id": 298,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=298&action=edit",
                                        "name": "Block8",
                                        "parent": "Blocks",
                                        "children": []
                                    },
                                    {
                                        "id": 301,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=301&action=edit",
                                        "name": "Block9",
                                        "parent": "Blocks",
                                        "children": []
                                    },
                                    {
                                        "id": 295,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=295&action=edit",
                                        "name": "Block10",
                                        "parent": "Blocks",
                                        "children": []
                                    },
                                    {
                                        "id": 298,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=298&action=edit",
                                        "name": "Block11",
                                        "parent": "Blocks",
                                        "children": []
                                    },
                                    {
                                        "id": 301,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=301&action=edit",
                                        "name": "Block12",
                                        "parent": "Blocks",
                                        "children": []
                                    }
                                ]
                            },
                            {
                                "id": 474,
                                "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=474&action=edit",
                                "name": "ContentElement",
                                "parent": null,
                                "children": []
                            }
                        ]
                    }';
        $obj = json_decode($HomeDatas);

        return $obj;

    }

    public static function catalogpage()
    {
        $catalogPage = '{
                            "pageType": "CatalogPage",
                            "pageTitle": "Our Selection of Fine Condoms",
                            "metadata": null,
                            "header": null,
                            "hero": null,
                            "blocks": null,
                            "contentElement": {
                                "id": 477,
                                "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=477&action=edit",
                                "content": {
                                    "value": "",
                                    "checksum": 0,
                                    "imageUrlMappings": []
                                },
                                "excerpt": {
                                    "value": "",
                                    "checksum": 0
                                },
                                "values": {
                                    "grid": null,
                                    "menu": null,
                                    "sort": null,
                                    "style": null,
                                    "form": null,
                                    "crossSell": null,
                                    "footerType": null
                                }
                            },
                            "footer": null,
                            "content": {
                                "value": "",
                                "checksum": 0,
                                "imageUrlMappings": []
                            },
                            "excerpt": {
                                "value": "",
                                "checksum": 0
                            },
                            "categories": [],
                            "id": 463,
                            "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=463&action=edit",
                            "values": [],
                            "linkTree": [
                                {
                                    "id": 477,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=477&action=edit",
                                    "name": "ContentElement",
                                    "parent": null,
                                    "children": []
                                }
                            ],
                            "productPages": [
                                {
                                    "pageType": "ProductPage",
                                    "pageTitle": "FlavorWave Condoms",
                                    "metadata": {
                                        "id": 428,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=428&action=edit",
                                        "content": {
                                            "value": "",
                                            "checksum": 0,
                                            "imageUrlMappings": []
                                        },
                                        "excerpt": {
                                            "value": "",
                                            "checksum": 0
                                        },
                                        "values": {
                                            "currency": "$",
                                            "twitterSite": "@ONECondoms",
                                            "twitterCreator": "@ONECondoms",
                                            "googleCondition": "New",
                                            "googleAgeCategory": "Adult",
                                            "googleGenderCategory": "Unisex"
                                        }
                                    },
                                    "header": null,
                                    "contentElement": {
                                        "id": 451,
                                        "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=451&action=edit",
                                        "content": {
                                            "value": "",
                                            "checksum": 0,
                                            "imageUrlMappings": []
                                        },
                                        "excerpt": {
                                            "value": "",
                                            "checksum": 0
                                        },
                                        "values": {
                                            "productSku": "3816903109",
                                            "twitterCard": null,
                                            "twitterCardImage": null,
                                            "manufacturerPartNumber": null,
                                            "tags": [
                                                "12-packs",
                                                "flavored-condoms",
                                                "condoms"
                                            ],
                                            "googleProductCategory": null,
                                            "googleColorCategory": null,
                                            "googleMaterialCategory": null,
                                            "googleUnitPricingMeasure": null,
                                            "productSlug": null,
                                            "mediumDescription": "<h3><strong>GET YOUR FLAVOR ON!<\/strong><\/h3>\n<b>ONE\u00ae FlavorWaves\u2122<\/b><span style=\"font-weight: 400;\"> condom 12-pack contains 6 delicious flavor experiences in unique colors. Includes: Chocolate Strawberry, Island Punch, Fresh Mint, Bubblegum, Mint Chocolate, and Banana Split. Safe for intercourse and contains no sugars. All ONE\u00ae Condoms feature Sensatex\u00ae ultra-soft latex for a more natural pleasure feeling. Pack of 12 condoms.<br><\/span>",
                                            "mediaCollection": [
                                                {
                                                    "id": 87,
                                                    "shopifyId": 28764422013010,
                                                    "name": "1324200_fl1_031422.png"
                                                },
                                                {
                                                    "id": 88,
                                                    "shopifyId": 28316981723218,
                                                    "name": "Condoms_FlavorWaves_Transparent_03a19c40-051d-437d-83ad-3c2032760f67.png"
                                                },
                                                {
                                                    "id": 89,
                                                    "shopifyId": 28764421980242,
                                                    "name": "1324200_fl2_031422.png"
                                                }
                                            ],
                                            "isVariant": false,
                                            "productObject": {
                                                "id": 25,
                                                "uuid": "375148e4-ac77-46a5-b981-1d933dc61c7e",
                                                "shopify_id": 3816903109,
                                                "salesforce_product2_id": null,
                                                "created_at": "2022-07-14T20:05:23.000000Z",
                                                "updated_at": "2022-07-14T20:05:23.000000Z",
                                                "status": false,
                                                "tags": "12-packs, Flavored Condoms, Condoms",
                                                "product_type": "Condoms",
                                                "vendor": "ONE\u00ae",
                                                "description": "<h3><strong>GET YOUR FLAVOR ON!<\/strong><\/h3>\n<b>ONE\u00ae FlavorWaves\u2122<\/b><span style=\"font-weight: 400;\"> condom 12-pack contains 6 delicious flavor experiences in unique colors. Includes: Chocolate Strawberry, Island Punch, Fresh Mint, Bubblegum, Mint Chocolate, and Banana Split. Safe for intercourse and contains no sugars. All ONE\u00ae Condoms feature Sensatex\u00ae ultra-soft latex for a more natural pleasure feeling. Pack of 12 condoms.<br><\/span>",
                                                "title": "FlavorWaves Condoms",
                                                "site_id": 1262
                                            },
                                            "productVariantObjects": [
                                                {
                                                    "id": 150,
                                                    "product_id": 25,
                                                    "shopify_variant_id": 31357045080146,
                                                    "title": "12",
                                                    "price": "8.48",
                                                    "momentum_value": null,
                                                    "created_at": "2022-07-14T20:05:23.000000Z",
                                                    "updated_at": "2022-07-14T20:05:23.000000Z",
                                                    "sku": "110202"
                                                }
                                            ]
                                        }
                                    },
                                    "footer": null,
                                    "content": {
                                        "value": "<p>This is a long description?<\/p>\n",
                                        "checksum": 3660077869,
                                        "imageUrlMappings": []
                                    },
                                    "excerpt": {
                                        "value": "<p>This is a short description?<\/p>\n",
                                        "checksum": 3545740731
                                    },
                                    "categories": [],
                                    "id": 434,
                                    "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=434&action=edit",
                                    "values": {
                                        "longDescription": "<p>This is a long description?<\/p>\n",
                                        "shortDescription": "<p>This is a short description?<\/p>\n"
                                    },
                                    "linkTree": [
                                        {
                                            "id": 428,
                                            "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=428&action=edit",
                                            "name": "Metadata",
                                            "parent": null,
                                            "children": []
                                        },
                                        {
                                            "id": 451,
                                            "link": "https:\/\/gpg-staging-wordpress.onecondoms.com\/wp-admin\/post.php?post=451&action=edit",
                                            "name": "ContentElement",
                                            "parent": null,
                                            "children": []
                                        }
                                    ]
                                }
                            ]
                        }';
        $obj = json_decode($catalogPage);
        return $obj;

    }
}
