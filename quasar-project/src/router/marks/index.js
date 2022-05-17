const marks =
{
      path: '/',
      component: () =>
        import ('layouts/UserLayout.vue'),
      children: [
        {
            path: '/marks/',
            component: () =>
              import ('pages/marks/index.vue')
        }
      ]
}

export default marks
