const students =
{
      path: '/',
      component: () =>
        import ('layouts/UserLayout.vue'),
      children: [
        {
            path: '/students/',
            component: () =>
              import ('pages/students/index.vue')
        }
      ]
}

export default students
