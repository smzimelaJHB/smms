const subjects =
{
      path: '/',
      component: () =>
        import ('layouts/UserLayout.vue'),
      children: [
        {
            path: '/subjects/',
            component: () =>
            import ('pages/subjects/index.vue')
        }
      ]
}

export default subjects
