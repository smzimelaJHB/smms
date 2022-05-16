const home =
{
  path: '/',
  component: () =>
      import ('layouts/MainLayout.vue'),
  children: [{
          path: '',
          component: () =>
              import ('pages/index.vue')
      }]
  }

export default home


