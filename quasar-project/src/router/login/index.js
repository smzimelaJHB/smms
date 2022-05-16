const login =
{
  path: '/',
  component: () =>
      import ('layouts/MainLayout.vue'),
  children: [{
    path: '/login',
    component: () =>
        import ('pages/login/index.vue')
},
{
path: '/signup',
component: () =>
  import ('pages/login/register.vue')
},
{
path: '/reset',
component: () =>
  import ('pages/login/reset.vue')
}]
  }

export default login


