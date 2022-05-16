const marks =
{
      path: '/',
      component: () =>
        import ('layouts/UserLayout.vue'),
      children: [
        {
            path: '/marks/',
            component: () =>
              import ('pages/marks/PageIndex.vue')
        }
      ]
}

export default marks
