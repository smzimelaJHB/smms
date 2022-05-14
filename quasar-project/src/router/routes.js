const routes = [{
        path: '/',
        component: () =>
            import ('layouts/MainLayout.vue'),
        children: [{
                path: '',
                component: () =>
                    import ('pages/IndexPage.vue')
            },
            {
                path: '/marks/',
                component: () =>
                    import ('pages/marks/PageIndex.vue')
            },
            {
                path: '/subjects/',
                component: () =>
                  import ('pages/subjects/PageIndex.vue')
            }
        ]
    },
    // Always leave this as last one,
    // but you can also remove it
    {
        path: '/:catchAll(.*)*',
        component: () =>
            import ('pages/ErrorNotFound.vue')
    }
]

export default routes
